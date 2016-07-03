<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\users;
class usercontroller extends Controller
{
   public function create_users(){
    $create_user = new users();
    $create_user->username = 'tallal001';
    $create_user->frst_nm = 'tallal1';
    $create_user->lst_nm = 'mansoor1';
    $create_user->email = 'tallal1@gmail.com';
    $create_user->pwd = 'ab1c';
    $create_user->work = 'ab1c';
    $create_user->gndr = 'gndr1';
    $create_user->save();
   }
   public function get_users(){
        $get_user_list = users::all();
        foreach ($get_user_list as $key => $value) {
             echo $value->username;
             echo $value->frst_nm;
             echo $value->email;
             echo $value->pwd;
             echo $value->work;
             echo $value->gndr;
             echo '</br>';
         } 
   }
}