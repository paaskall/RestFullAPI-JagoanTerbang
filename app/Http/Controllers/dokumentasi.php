<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Dokumentasi extends Controller
{
    public function dokumentasi(){
        return view('dokumentasi');
    }
}
