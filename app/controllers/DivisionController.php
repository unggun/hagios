<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;


class DivisionController extends BaseController {
  public function show($slug){

    $divisions = Division::where('dvSlug', $slug)->first();

    if ($divisions->dvId != 6) {
        $schedules = Schedule::where('sSvId', $divisions->dvId)
                ->whereRaw('sTime > NOW()')
                ->orderBy('sTime')
                ->first();
    }
    else {$schedules = [];}

    

    $articles = Article::where('aType', '=', $divisions->dvId)->get();

    $extraSection = '';
    if ($divisions->dvId == 4) {
      $extraSection = '
                    <div id="social-icon" class="text-center">
                        <a href="https://www.facebook.com/groups/228268297212674/"><i id="social" class="fa fa-facebook fa-3x social-fb"></i></a>
                              <a href="https://twitter.com/hagiosyouth"><i id="social" class="fa fa-twitter fa-3x social-tw"></i></a>
                              <a href="https://www.youtube.com/channel/UC1oNCkXtYcihwOX2ihAT55g"><i id="social" class="fa fa-youtube-play fa-3x social-gp"></i></a>
                              <a href="mailto:hagiosyouth@gmail.com"><i id="social" class="fa fa-envelope fa-3x social-em"></i></a>
                      </div>';    
    }
    


   	return View::make('division')
                ->with('schedule', $schedules)
                ->with('articlesdata', $articles)
                ->with('divisiondata', $divisions)
                ->with('extraSection', $extraSection);
  }
}

?>