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

        		$destinationPath = 'uploads/images/sermon/';
        	    $file->move($destinationPath, $filename);
        		$sermon->srImage	= $destinationPath.$filename;

        	}

          $sermon->save();
          return Redirect::route('sermonslist')
                        ->withSuccess('Khotbah baru berhasil ditambahkan!');
        }
    else {
      return Redirect::back()->withErrors($valid)->withInput();
    }
  }


  public function show(){
    $sermons = Sermon::orderBy('created_at','DESC')->paginate(10);
    return View::make('sermon')->with('sermonsdata', $sermons);
  }

  public function showList(){
    $sermons = Sermon::orderBy('created_at','DESC')->paginate(25);
    return View::make('sermonlist')->with('sermonsdata', $sermons);
  }

  public function showSermon(Sermon $sermon){
    //$this->layout->title = 'Hagios Family | '.$sermon->aTitle;
    return View::make('showsermon')->with('sermondata', $sermon);
  }

   public function edit(Sermon $sermon)
    {
        //$this->layout->title = 'Edit Post';
        return View::make('editsermon')->with('sermon',$sermon);
    }

  public function update(Sermon $sermon)
  {
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

            $sermon->srTitle        = $post['title'];
            $sermon->srName         = $post['author'];
            $sermon->srContent    = $post['content'];
            $sermon->srIntro        = (strlen($post['content']) > 500) ? substr($post['content'], 0, 500) : $post['content'];

            if (Input::hasFile('image1'))
            {
              $file     = Input::file('image1');
              $filename = str_random(25).'-'.$file->getClientOriginalName();

              $destinationPath = 'uploads/images/sermons/';
              File::delete($sermon->srImage);
              $file->move($destinationPath, $filename);
              $sermon->srImage = $destinationPath.$filename;

            }


            if(count($sermon->getDirty()) > 0) /* avoiding resubmission of same content */
            {
                $sermon->save();
                return Redirect::back()->withSuccess('Khotbah berhasil diubah!');
            }
            else
                return Redirect::back()->with('success','Nothing to update!');

          
          }
      else {
        return Redirect::back()->withErrors($valid)->withInput();
      }
  }

  public function delete(Sermon $sermon)
    {
        File::delete($sermon->srImage);
        $sermon->delete();
        return Redirect::route('sermonslist')->with('success', 'Khotbah berhasil dihapus!');
    }

}

?>