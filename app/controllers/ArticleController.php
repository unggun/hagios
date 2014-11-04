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
          $article->aUserName     = Input::get('user');

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
        return Redirect::route('articleslist')
                        ->withSuccess('Artikel baru berhasil ditambahkan!');
        }
    else {
      return Redirect::back()->withErrors($valid)->withInput();
    }

    

  }


  public function show(){
    $articles = Article::orderBy('created_at', 'DESC')->paginate(10);
    return View::make('articles')->with('articlesdata', $articles);
  }

  public function showList(){
    $articles = Article::orderBy('created_at', 'DESC')->paginate(25);
    $divisionName = ['Umum', 'Lansia', 'Pria', 'Wanita', 'Pemuda', 'Remaja', 'Sekolah Minggu', 'Pasutri'];
    return View::make('articlelist')
                ->with('articlesdata', $articles)
                ->with('divisionName', $divisionName);
  }

  public function showArticle(Article $article){
    //$this->layout->title = 'Hagios Family | '.$article->aTitle;
    return View::make('showarticle')->with('articledata', $article);
  }

  public function edit(Article $article)
    {
        //$this->layout->title = 'Edit Post';
        return View::make('editarticle')->with('article',$article);
    }

    public function update(Article $article)
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

              $article->aType     = Input::get('division');
              $article->aTitle        = $post['title'];
              $article->aAuthor         = $post['author'];
              $article->aContent    = $post['content'];
              $article->aIntro        = (strlen($post['content']) > 500) ? substr($post['content'], 0, 500) : $post['content'];
              $article->aUpdated_by     = Input::get('user');

              if (Input::hasFile('image1'))
              {
                $file     = Input::file('image1');
                $filename = str_random(25).'-'.$file->getClientOriginalName();

                $destinationPath = 'uploads/images/articles/';
                File::delete($article->aImage1);
                $file->move($destinationPath, $filename);
                $article->aImage1 = $destinationPath.$filename;

              }

              if (Input::hasFile('image2'))
              {
                $file     = Input::file('image2');
                $filename = str_random(25).'-'.$file->getClientOriginalName();

                $destinationPath = 'uploads/images/articles/';
                File::delete($article->aImage2);
                  $file->move($destinationPath, $filename);
                $article->aImage2 = $destinationPath.$filename;

              }

              if(count($article->getDirty()) > 0) /* avoiding resubmission of same content */
              {
                  $article->save();
                  return Redirect::back()->withSuccess('Artikel berhasil diubah!');
              }
              else
                  return Redirect::back()->with('success','Nothing to update!');

            
            }
        else {
          return Redirect::back()->withErrors($valid)->withInput();
        }
    }

    public function delete(Article $article)
    {
        File::delete($article->aImage1);
        File::delete($article->aImage2);
        $article->delete();
        return Redirect::route('articleslist')->with('success', 'Artikel berhasil dihapus!');
    }
}

?>