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

       	
       	//echo $upcoming->sTime; die();

        $upcoming->save();
        return Redirect::route('eventslist')
                        ->withSuccess('Event baru berhasil ditambahkan!');
    }
    else {
      return Redirect::back()->withErrors($valid)->withInput();
    }
  }

  public function showList(){
    $upcomings = Upcoming::orderBy('created_at', 'DESC')->paginate(10);
    $divisionName = ['Umum', 'Lansia', 'Pria', 'Wanita', 'Pemuda', 'Remaja', 'Sekolah Minggu', 'Pasutri'];
    return View::make('upcominglist')
                ->with('upcomings', $upcomings)
                ->with('divisionName', $divisionName);
  }

   public function edit(Upcoming $upcoming)
    {
        //$this->layout->title = 'Edit Post';
        return View::make('editevent')->with('upcoming',$upcoming);
    }

    public function update(Upcoming $upcoming)
    {
       $post = [
              'name' => Input::get('name'),
              'datetime' => Input::get('datetime'),
            ];
        $rules = [
                      'name' => 'required',
                      'datetime' => 'required',
                  ];

        $valid = Validator::make($post, $rules);

        if ($valid->passes())
            {

              $upcoming->uType     = Input::get('division');
              $upcoming->uName        = $post['name'];
              $upcoming->uDesc         = Input::get('description');
              $upcoming->uExpire_at = date("Y-m-d H:i:s", strtotime($post['datetime']));

              if (Input::hasFile('image'))
              {
                $file     = Input::file('image');
                $filename = str_random(25).'-'.$file->getClientOriginalName();
                File::delete($upcoming->uImage);
                $destinationPath = 'uploads/images/upcomings/';
                $file->move($destinationPath, $filename);
                $upcoming->uImage = $destinationPath.$filename;

              }

              if(count($upcoming->getDirty()) > 0) /* avoiding resubmission of same content */
              {
                  $upcoming->save();
                  return Redirect::back()->withSuccess('Event berhasil diubah!');
              }
              else
                  return Redirect::back()->with('success','Nothing to update!');

            
            }
        else {
          return Redirect::back()->withErrors($valid)->withInput();
        }
    }

    public function delete(Upcoming $upcoming)
    {
        File::delete($upcoming->uImage);
        $upcoming->delete();
        return Redirect::route('eventslist')->with('success', 'Event berhasil dihapus!');
    }
}

?>