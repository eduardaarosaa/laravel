<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        return view('cadastro-pj');
    }
    public function part(){
        return view('cadastro-pj-part');
    }
    public function part1(){
        return view('cadastro-pj-part1');
    }
}
