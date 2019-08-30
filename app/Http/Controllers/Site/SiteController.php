<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DB;
use Storage;

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
        $images = array();
        if ($files = $request->file('images')) {

            foreach ($files as $key => $file) {
                $name = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $new = rand();
                $file->move('image', $new . '.' . $extension);
                $images[] = $new . '.' . $extension;
            }
            // print_r($images);
            $contrato = ($images[0]);
            $cnpj = ($images[1]);
            $balanco = ($images[2]);
            $balancete = ($images[3]);


            $create = DB::table('company_info')->insert(["file1" => $contrato, "faturamento" => $faturamento,
             "file2"=> $cnpj, "file3"=> $balanco, "file4"=>$balancete]);


            if ($create == true) {

                return redirect()->route('part1');
            } else {

                return redirect()->back();
            }
        }

        // return redirect()->back()->with('message', 'Successfully Save Your Image file.');


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
