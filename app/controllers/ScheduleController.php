<?php

class ScheduleController extends BaseController {
  public function store(){

    $schedule = new Schedule;

    $schedule->sSvId			= Input::get('division');
    $schedule->sSpeaker      = Input::get('speaker');

    $datetimeinput      	= strtotime(Input::get('datetime'));
    $schedule->sTime = date("Y-m-d H:i:s", $datetimeinput);
   	
   	//echo $article->sTime; die();

    $schedule->save();

  }

  public function showNext(){
  	$schedules = Schedule::where('sSvId', 1)
   						->whereRaw('sTime > NOW()')
   						->orderBy('sTime')
   						->limit(1)
   						->get();

   	return View::make('schedulelist')->with('schedulesdata', $schedules);
  }

  public function showEachDiv(){
    $routines = Division::get();

    return View::make('servicetime')->with('routines', $routines);
  }
}

?>