<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function videoView()
    {
        try{

            return view('web.videos.view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function videoMonthlyView()
    {
        try{

            return view('web.videos.monthly_view');

        }catch(\Exception $exception){

            return;
        }
    }

    public function videoMonthlyListView()
    {
        try{

            return view('web.videos.monthly_list');

        }catch(\Exception $exception){

            return;
        }
    }

    
    public function videoMonthlySet()
    {
        try{

            return view('web.videos.monthly_set');

        }catch(\Exception $exception){

            return;
        }
    }


    


    public function videoSubjectView()
    {
        try{

            return view('web.videos.subject_view');

        }catch(\Exception $exception){

            return;
        }
    }


    public function videoSubjectList()
    {
        try{

            return view('web.videos.subject_list');

        }catch(\Exception $exception){

            return;
        }
    }


}
