<?php

class UpcomingController extends BaseController {
  public function store(){

    $post = [
              'name' => Input::get('name'),
              'image' => Input::file('image'),
              'expire' => Input::get('datetime'),
            ];
    $rules = [
                  'name' => 'required',
                  'image' => 'required',
                  'expire' => 'required',
              ];

    $valid = Validator::make($post, $rules);

    if ($valid->passes()) {
        $upcoming = new upcoming;

        $upcoming->uType			= Input::get('division');
        $upcoming->uName      = Input::get('name');
        $upcoming->uDesc     = Input::get('description');

        $datetimeinput      	= strtotime(Input::get('datetime'));
        $upcoming->uExpire_at = date("Y-m-d H:i:s", $datetimeinput);

        
        $file     = Input::file('image');
        $filename = str_random(25).'-'.$file->getClientOriginalName();

        $destinationPath = 'uploads/images/upcomings/';
        $file->move($destinationPath, $filename);
        $upcoming->uImage = $destinationPath.$filename;

       	
       	//echo $article->sTime; die();

        $upcoming->save();
    }
    else {
      return Redirect::back()->withErrors($valid)->withInput();
    }
  }

}

?>