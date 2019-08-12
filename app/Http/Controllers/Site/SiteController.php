<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        return '    Home do site';
    }
    public function contato(){
        return 'Home do contato';
    }
    public function categoria($id){
        return "Listagem de categoria {$id}";
    }
}
