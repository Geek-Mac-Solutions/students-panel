<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    private $serverApiKey;
    public function __construct()
    {
        $this->serverApiKey = env('CLIENT_KEY');
       
    }
    public function index()
    {
        try{
            $homeHeader = 1;
            $homeFooter= 1;
            return view('web.auth.open',compact('homeHeader','homeFooter'));

        }catch(\Exception $exception){

            return;
        }
    }
    public function loginView(Request $request)
    {
        
        $client = new Client();
        
        // Fetch the API Gateway URL from the environment variables
        $url = env('API_GETWAY_URL') . '/api/v1/students-check-auth';
        $accessToken = $request->cookie('access_token');

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    return redirect()->route('web.home')->with('success', $body['message']);
                }else{
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
                }
            }
        } catch (\Exception $e) {
            // Log the error if needed and handle exceptions
                    $homeHeader = 1;
                    $homeFooter= 1;
                    return view('web.auth.login',compact('homeHeader','homeFooter'));
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
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/grades';
        
        try {
            $response = $client->get($url, [
                'headers' => [
                     'CLIENT_KEY' => $this->serverApiKey
                ]
            ]);
            
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    $grades = $body['data']; // Extracting grades data from response
                    return view('web.auth.register-step3', ['grades' => $grades]);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
        } catch (\Exception $e) {
            
            return back()->with('error', $e);
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


    

     public function login(Request $request)
    {
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/students-login';
        
        
        

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'CLIENT_KEY' => $this->serverApiKey
                ],
                'form_params' => [
                    'username' => $request->phone_number,
                    'password' => $request->password,
                ]
            ]);

           if ($response->getStatusCode() == 200) {
            $body = json_decode($response->getBody(), true);
            if (isset($body['status']) && $body['status'] === 200) {
                // Store token in a secure cookie
                Cookie::queue('access_token', $body['data']['access_token'], 360); // 360 minutes (6 hours)
               
                return redirect()->route('web.home')->with('success', $body['message']);
            } else {
                return back()->with('error', $body['message']);
            }
        }
    } catch (\Exception $e) {
        Log::error('Login failed: ' . $e->getMessage());
        return back()->with('error', 'An error occurred while trying to log in.');
    }
    }



    public function logout(Request $request)
    {
        $client = new Client();
        $url = env('API_GETWAY_URL') . '/api/v1/students-logout';
        $accessToken = $request->cookie('access_token');
        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                     'CLIENT_KEY' => $this->serverApiKey
                ]
            ]);
            if ($response->getStatusCode() == 200) {
                $body = json_decode($response->getBody(), true);
                if (isset($body['status']) && $body['status'] === 200) {
                    // Store token in a secure cookie
                    Cookie::queue(Cookie::forget('access_token'));
                    return redirect()->route('web.home')->with('success', $body['message']);
                } else {
                    return back()->with('error', $body['message']);
                }
            }
        } catch (\Exception $e) {
            Log::error('Logout failed: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while trying to log out.');
        }
    }






}
