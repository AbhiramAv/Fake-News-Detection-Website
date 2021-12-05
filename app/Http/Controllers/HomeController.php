<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;   

class HomeController extends Controller
{
    public function index(){

        $role = Auth::user()->role;

        if($role == 1)
        {
            return view('admin.dashboard');
        }
        else if($role == 0)
        {   
            return view('search.pane');
        }
        // else if($role == 0 && $is_verified == 0)
        // {
        //     return alert('You need to be approved by the admin.');
        // }
    }
}
