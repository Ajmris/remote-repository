<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $title='Welcome on my website!';
        return view('welcome')->with('title', $title);
    }
    public function dashboard(){
        $title='Welcome on Dashboard site!';
        return view('dashboard')->with('title', $title);
    }
}