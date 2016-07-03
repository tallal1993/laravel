<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class pagecontroller extends Controller
{
    public function index(){
    	return View('page.home');
    }

    public function about(){
    	return View('page.about');
    }
    public function event(){
    	return View('page.events');
    }
}
