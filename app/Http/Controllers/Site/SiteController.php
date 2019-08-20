<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use DB;
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
    public function part()
    {
        return view('cadastro-pj-part');
    }
    public function part1()
    {
        return view('cadastro-pj-part1');
    }
    public function cadastro(Request $request)
    {

        // $dataForm = $request->all();
        //     dd($dataForm);
        // // $insert = $this->cadastro->create($dataForm);

        // // if($insert == true){
        // //     return "Ok";
        // // }else{
        // //     return "false";
        // // }       

    }
    public function cadastro_empresa(Request $request)
    {

        $dataForm = $request->except('_token', 'rua', 'numero', 'bairro', 'cidade', 'cep', 'estado');
        //dd($dataForm);
        $insert = DB::table('company_data')->insert($dataForm);


        $dataForm1 = $request->except('_token', 'email', 'razao', 'cnpj', 'obj_social', 'tipo_socio');
        $create = DB::table('company_adress')->insert($dataForm1);

        if ($insert && $create == true) {

            return redirect()->route('part');
        } else {

            return redirect()->back();
        }
    }
    public function cadastro_info(Request $request)
    {
        $dataForm = $request->except('_token');

        //$request->file->move(public_path('/upload'));
   
        // $images=array();
        // if($files=$request->file('files')){
        // foreach($files as $file){
        // $name=$file->getClientOriginalName();
        // $file->move('image',$name);
        // $images[]=$name;

        dd($dataForm);
      
       // }
       
    }
      // $create = DB::table('company_info')->insert($dataForm);

        // if ($create && $create == true) {

        //     return redirect()->route('part1');
        // } else {

        //     return redirect()->back();
        // }  

        // $inserir = DB::table('company_info')->insert($dataForm);

    public function cadastro_pf(){
        
        return view('cadastro_pf');
    }

    public function pf_date(){
        //pegar os dados para o insert
    }

    public function doc_pf(){

        return view('doc_pf');
    }

    public function cadastro_doc(){
        //pegar os documentos para o insert.
    }
        }