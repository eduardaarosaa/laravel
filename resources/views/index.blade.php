@extends('template.template-padrao')

@section('padrao')

<div class="container">
<div class="jumbotron jumbotron-fluid">
    <div class="row">
        <div class='col-md-12 text-center'>
                <img src="img/logo.jpg" class="img-fluid" alt="Responsive image" width="350">
                <br><br>
                 </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                <h3 class="text-center">Cadastro de Mesa Balcão.</h3>
                </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">Selecione o tipo de cadastro. </p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12 text-center">
                        <a href="{{route('index')}}"><button class="btn btn-danger">Pessoa Júridica</button></a>
                        <a href="{{route('cadastro_pf')}}"><button class="btn btn-danger">Pessoa Física</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">A Bloco1 agradece o seu cadastro. </p>
                    </div>
                </div>
            </div>
        </div>




@endsection