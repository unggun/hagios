<?php

class ArticleController extends BaseController {
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

          $article = new Article;

          $article->aType			= Input::get('division');
          $article->aTitle       	= $post['title'];
          $article->aAuthor      		= $post['author'];
          $article->aContent 		= $post['content'];
          $article->aIntro       	= (strlen($post['content']) > 500) ? substr($post['content'], 0, 500) : $post['content'];

          if (Input::hasFile('image1'))
    			{
    				$file     = Input::file('image1');
    				$filename = str_random(25).'-'.$file->getClientOriginalName();

    				$destinationPath = 'uploads/images/articles/';
    			    $file->move($destinationPath, $filename);
    				$article->aImage1	= $destinationPath.$filename;

    			}

    			if (Input::hasFile('image2'))
    			{
    				$file     = Input::file('image2');
    				$filename = str_random(25).'-'.$file->getClientOriginalName();

    				$destinationPath = 'uploads/images/articles/';
    			    $file->move($destinationPath, $filename);
    				$article->aImage2	= $destinationPath.$filename;

    			}

		    $article->save();

        }
    else {
      return Redirect::back()->withErrors($valid)->withInput();
    }

    

  }


  public function show(){
    $articles = Article::orderBy('created_at', 'DESC')->get();
    return View::make('articles')->with('articlesdata', $articles);
  }

  public function showArticle(Article $article){
    //$this->layout->title = 'Hagios Family | '.$article->aTitle;
    return View::make('showarticle')->with('articledata', $article);
  }
}

?>