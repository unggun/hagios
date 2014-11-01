<?php

class TeamController extends BaseController {
  public function show($slug){

    $team = Team::where('tSlug', $slug)->first();

    
   	return View::make('team')
                ->with('teamdata', $team);
  }
}

?>