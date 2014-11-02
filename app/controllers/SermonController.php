<?php

class SermonController extends BaseController {
  public function store(){

    $post = [
              'title' => Input::get('title'),
              'author' => Input::get('author'),
              'content' => Input::get('content'),
            ];

    $rules = [
                  'title' => 'required',
                  'author' => 'required',
                  'content' => 'required',
              ];

    $valid = Validator::make($post, $rules);

    if ($valid->passes())
        {

          $sermon = new Sermon;

          $sermon->srTitle       	= $post['title'];
          $sermon->srName      		= $post['author'];
          $sermon->srContent 		= $post['content'];
          $sermon->srIntro       	= (strlen($post['content']) > 500) ? substr($post['content'], 0, 500) : $post['content'];

          if (Input::hasFile('image1'))
        	{
        		$file     = Input::file('image1');
        		$filename = str_random(25).'-'.$file->getClientOriginalName();

        		$destinationPath = 'uploads/images/';
        	    $file->move($destinationPath, $filename);
        		$sermon->srImage	= $destinationPath.$filename;

        	}

          $sermon->save();

        }
    else {
      return Redirect::back()->withErrors($valid)->withInput();
    }
  }


  public function show(){
    $sermons = Sermon::orderBy('created_at','DESC')->get();
    return View::make('sermon')->with('sermonsdata', $sermons);
  }

  public function showSermon(Sermon $sermon){
    //$this->layout->title = 'Hagios Family | '.$article->aTitle;
    return View::make('showsermon')->with('sermondata', $sermon);
  }

}

?>