<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherSubjectController extends Controller
{
    public function teacherSubject()
    {
        try{

            return view('web.teacher-subject.view');

        }catch(\Exception $exception){

            return;
        }
    }
}
