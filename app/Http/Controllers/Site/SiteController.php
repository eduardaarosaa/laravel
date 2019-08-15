<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Site\cadastro;

class SiteController extends Controller
{
    private $cadastro;
    
    public function __construct(Cadastro $cadastro)
    {
        $this->cadastro = $cadastro;
    }
    public function index()
    {
        
        return view('cadastro-pj');
    }
    public function part(){
        return view('cadastro-pj-part');
    }
    public function part1(){
        return view('cadastro-pj-part1');
    }
    public function cadastro(Request $request){
    
        $dataForm = $request->all();
            dd($dataForm);
        // $insert = $this->cadastro->create($dataForm);

        // if($insert == true){
        //     return "Ok";
        // }else{
        //     return "false";
        // }       
       
    }
}
