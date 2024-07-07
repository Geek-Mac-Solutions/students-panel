<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function homeView()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.open',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }
    public function loginView()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.login',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }
    public function registerView()
    {
        try{

            return view('web.auth.register');

        }catch(\Exception $exception){

            return;
        }
    }


    public function registerStep1()
    {
        try{

            return view('web.auth.register-step1');

        }catch(\Exception $exception){

            return;
        }
    }


    
    public function registerStep2()
    {
        try{

            return view('web.auth.register-step2');

        }catch(\Exception $exception){

            return;
        }
    }


      
    public function registerStep3()
    {
        try{

            return view('web.auth.register-step3');

        }catch(\Exception $exception){

            return;
        }
    }



    public function registerStep4()
    {
        try{

            return view('web.auth.register-step4');

        }catch(\Exception $exception){

            return;
        }
    }



    
    public function registerStep5()
    {
        try{

            return view('web.auth.register-step5');

        }catch(\Exception $exception){

            return;
        }
    }













    public function forgotPassword()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.forgot-password',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }


    










}
