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
        $faturamento = $_POST['faturamento'];
        //print_r ($faturamento);

        // Define o valor default para a variável que contém o nome da imagem 
        $nameFile = null;

       
        $loop = count($request->image);

        //print_r($loop);
        for ($i = 0; $i < $loop; $i++) {

            // var_dump($request->image[$i]);

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->image[$i]->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";
            

            $upload = $request->image[$i]->storeAs('upload', $nameFile);

            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/upload/nomedinamicoarquivo.extensao
         

            $array = explode(",", $upload);

               
            var_dump($array);





        }
    }

    public function cadastro_pf()
    {

        return view('cadastro_pf');
    }

    public function pf_date()
    {
        //pegar os dados para o insert
    }

    public function doc_pf()
    {

        return view('doc_pf');
    }

    public function cadastro_doc()
    {
        //pegar os documentos para o insert.
    }
}
