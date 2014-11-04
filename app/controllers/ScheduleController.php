<?php

class ScheduleController extends BaseController {
  public function store(){
    $post = [
              'speaker' => Input::get('speaker'),
              'datetime' => Input::get('datetime'),
            ];
    $rules = [
                  'speaker' => 'required',
                  'datetime' => 'required',
              ];

    $valid = Validator::make($post, $rules);

    if ($valid->passes())
        {
        $schedule = new Schedule;

        $schedule->sSvId			= Input::get('division');
        $schedule->sSpeaker      = $post['speaker'];

        $datetimeinput      	= strtotime($post['datetime']);
        $schedule->sTime = date("Y-m-d H:i:s", $datetimeinput);

        $schedule->sPosted_by   = Input::get('user');
       	
       	//echo $schedule->sTime; die();

        $schedule->save();
        return Redirect::route('scheduleslist')
                            ->withSuccess('Jadwal baru berhasil ditambahkan!');
        }
    else {
      return Redirect::back()->withErrors($valid)->withInput();
    }

  }

  public function showNext(){
  	$schedules = Schedule::where('sSvId', 1)
   						->whereRaw('sTime > NOW()')
   						->orderBy('sTime')
   						->limit(1)
   						->get();

   	return View::make('schedulelist')->with('schedulesdata', $schedules);
  }

  public function showList(){
    $schedules = Schedule::orderBy('sSvId')->paginate(25);
    $divisionName = ['Umum', 'Lansia', 'Pria', 'Wanita', 'Pemuda', 'Remaja', 'Sekolah Minggu', 'Pasutri'];
    return View::make('schedulelist')
                ->with('schedulesdata', $schedules)
                ->with('divisionName', $divisionName);
  }

  public function showEachDiv(){
    $routines = Division::get();

    return View::make('servicetime')->with('routines', $routines);
  }

   public function edit(Schedule $schedule)
    {
        //$this->layout->title = 'Edit Post';
        return View::make('editschedule')->with('schedule',$schedule);
    }

    public function update(Schedule $schedule)
    {
       $post = [
              'speaker' => Input::get('speaker'),
              'datetime' => Input::get('datetime'),
            ];
        $rules = [
                      'speaker' => 'required',
                      'datetime' => 'required',
                  ];

        $valid = Validator::make($post, $rules);

        if ($valid->passes())
            {
              $schedule->sSvId     = Input::get('division');
              $schedule->sSpeaker        = $post['speaker'];
              $datetimeinput        = strtotime($post['datetime']);
              $schedule->sTime = date("Y-m-d H:i:s", $datetimeinput);
              $schedule->sUpdated_by    = Input::get('user');

              if(count($schedule->getDirty()) > 0) /* avoiding resubmission of same content */
              {
                  $schedule->save();
                  return Redirect::back()->withSuccess('Artikel berhasil diubah!');
              }
              else
                  return Redirect::back()->with('success','Nothing to update!');

            
            }
        else {
          return Redirect::back()->withErrors($valid)->withInput();
        }
    }

    public function delete(Schedule $schedule)
    {
        $schedule->delete();
        return Redirect::route('scheduleslist')->with('success', 'Jadwal berhasil dihapus!');
    }
}

?>