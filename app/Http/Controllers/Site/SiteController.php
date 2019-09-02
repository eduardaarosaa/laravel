<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DB;
use App\cadastroPjSocio;
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

    public function cadastroSocio(Request $request){
        
        $nomesocio = $_POST['name_socio'];
        $cpfsocio = $_POST['cpf_socio'];
        $pep = $_POST['pep'];
        $partido = $_POST['partido'];
        $nomesocio1 = $_POST['name_socio1'];
        $cpfsocio1 = $_POST['cpf_socio1'];
        $pep1 = $_POST['pep1'];
        $partido1 = $_POST['partido1'];
        $nomesocio2 = $_POST['name_socio2'];
        $cpfsocio2 = $_POST['cpf_socio2'];
        $pep2 = $_POST['pep2'];
        $partido2 = $_POST['partido2'];
        $nomesocio3 = $_POST['name_socio3'];
        $cpfsocio3 = $_POST['cpf_socio3'];
        $pep3 = $_POST['pep3'];
        $partido3 = $_POST['partido3'];
        $telefone = $_POST['phone_resp'];
    
        $images = array();
        if ($files = $request->file('images')) {

            foreach ($files as $key => $file) {
                $name = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $new = rand();
                $file->move('socio', $new . '.' . $extension);
                $images[] = $new . '.' . $extension;
            }

            $documento = ($images[0]);
            $selfie = ($images[1]);
            $comprovante = ($images[2]);
            $procuracao = ($images[3]);
            $documento1 = ($images[4]);
            $selfie1 = ($images[5]);
            $comprovante1 = ($images[6]);
            $documento2 = ($images[7]);
            $selfie2 = ($images[8]);
            $comprovante2 = ($images[9]);
            $documento3 = ($images[10]);
            $selfie3 = ($images[11]);
            $comprovante3 = ($images[12]);
            $create = DB::table('company_socio')->insert(["nomesocio" => $nomesocio, "cpfsocio" => $cpfsocio,
            "pep"=> $pep, "partido"=> $partido, "documento"=>$documento, "selfie"=> $selfie,
            "comprovante"=>$comprovante, "procuracao"=>$procuracao, "nomesocio1"=>$nomesocio1,
            "cpfsocio1"=>$cpfsocio1, "pep1"=>$pep1, "partido1"=>$partido1, "documento1"=>$documento1,
            "selfie1"=>$selfie1, "comprovante1"=>$comprovante1,"nomesocio2"=>$nomesocio2,
            "cpfsocio2"=>$cpfsocio2, "pep2"=>$pep2, "partido2"=>$partido2, "documento2"=>$documento2,
            "selfie2"=>$selfie2, "comprovante2"=>$comprovante2, "nomesocio3"=>$nomesocio3, "cpfsocio3"=>$cpfsocio3,
            "pep3"=>$pep3, "partido3"=>$partido3, "documento3"=>$documento3, "selfie3"=>$selfie3, "comprovante3"=>$comprovante3,
            "telefone"=>$telefone
            ]);


           if ($create == true) {

               return view('cadastroFinalizado');
           } else {

               return redirect()->back();
           }

        }
      
    }
    public function cadastro_pf()
    {

        return view('cadastro_pf');
    }

    public function pf_date(Request $request)
    {
        $dataForm = $request->except('_token', 'rua', 'numero', 'bairro', 'cidade', 'cep', 'estado');
       // dd($dataForm);
        $insert = DB::table('company_fisica')->insert($dataForm);

        $dataForm1 = $request->except('_token', 'email', 'nome', 'cpf', 'pep', 'partido');
        $create = DB::table('company_adress_pf')->insert($dataForm1);

        if($insert && $create == true){
            return view('doc_pf');
        }else{
            echo 'error';
        }
    }

    public function doc_pf()
    {

        return view('doc_pf');
    }

    public function cadastro_doc(Request $request)
    {
       $intermediador = $_POST['intermediador'];
       $telefone = $_POST['telefone'];

       $images = array();
        if ($files = $request->file('images')) {

            foreach ($files as $key => $file) {
                $name = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $new = rand();
                $file->move('pessoaFisica', $new . '.' . $extension);
                $images[] = $new . '.' . $extension;
            }

            $documento = ($images[0]);
            $selfie = ($images[1]);
            $comprovante = ($images[2]);
            
            $create = DB::table('company_doc_fis')->insert(["documento" => $documento, "selfie" => $selfie,
            "comprovante"=> $comprovante, "intermediador"=> $intermediador, "telefone"=>$telefone
            ]);


           if ($create == true) {

               return view('cadastroFinalizado');
           } else {

               return redirect()->back();
           }

        }
      

    }

    public function inicio(){
        return view('index');
    }
}
