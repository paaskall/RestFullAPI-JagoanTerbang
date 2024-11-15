<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Dashbord extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
}
