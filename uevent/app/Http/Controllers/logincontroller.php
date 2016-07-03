<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use Hash;
use DB;
use Session;
class logincontroller extends Controller
{
    public function login(Request $reqst){
        return View('page.login');
        // echo"Login page";
    }
    public function register(Request $reqst){
        return View('page.register');
        // echo"Login page";
    }
    public function register_auth(Request $reqst){
        if($reqst){
            $validator = Validator::make(
                                                array('username'=>$reqst->username,
                                                'email'=>$reqst->email,
                                                'phone'=>$reqst->phone,
                                                'password'=>$reqst->password,
                                                'confirmpassword'=>$reqst->confirmpassword,
                                                'agree'=>$reqst->agree),

                                                array('username'=>'required',
                                                      'email'=>'required|email|unique:users',
                                                      'phone'=>'required|unique:users',
                                                      'password'=>'required',
                                                      'confirmpassword'=>'required|same:password',
                                                      'agree'=>'required|min:1')
                );
                if($validator->fails()){
                    return redirect('register')->withErrors($validator)->withInput();
                }
                else{
                    $remember_token = $reqst->_token;
                    $date = date('Y-m-d H:i:s');
                    $data = array('username'=>$reqst->username,
                                    'email'=>$reqst->email,
                                    'phone'=>$reqst->phone,
                                    'password'=> Hash::make($reqst->password),
                                    'agree'=>$reqst->agree,
                                    'remember_token'=>$remember_token,
                                    'created_at'=>$date,
                                    'updated_at'=>$date);
                    $user_add = DB::table('users')->insert($data);
                   if($user_add){
                    Session::put("usercheckin",$reqst->email);
                    return redirect()->intended('events');

                   } 
                }
        }
            else{
                return redirect('login');
            }
    }
    public function loginauth(Request $reqst){
        if($reqst){
            $validator = Validator::make(array('email'=>$reqst->email,'password'=>$reqst->password),
                array('email'=>'required|email','password'=>'required')
                );
                if($validator->fails()){
                    return redirect('login')->withErrors($validator)->withInput();
                }
                else{
                   if (Auth::attempt(array("email" => $reqst->email,"password" => $reqst->password))){
                            Session::put("usercheckin",$reqst->email);
                            return redirect()->intended('events');
                        }
                        else{
                            return redirect('login')->withErrors($validator)->withInput();
                        }
                    // return redirect()->intended('events');
                    
                }
        }
        else{
            return redirect('login');
        }
    }
    public function logout(Request $reqst){
    	// Auth::logout();
        $reqst->session()->flush();
    	return redirect()->intended('Home');
    }
}
