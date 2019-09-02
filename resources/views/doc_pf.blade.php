@extends('template.template-padrao')

@section('padrao')
<div class="container">
    <div class="row">
        <div class='col-md-12'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="text-center">Documentação</h3>
                    <form method="POST" action="{{route('pf_doc')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Documento de identidade com foto*</b></p>

                                <input type="file" id="inputeste2" name="images[]" multiple />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Selfie (autorretrato) com documento*</b></p>

                                <input type="file" id="inputeste2" name="images[]" multiple />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Comprovante de endereço*</b></p>

                                <input type="file" id="inputeste2" name="images[]" multiple />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Negociações serão feitas através de um intermediador?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="intermediador" id="exampleRadios1" value="sim">
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="intermediador" id="exampleRadios2" value="nao">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone do responsável pelas transações*
                            </label>
                            <input type="text" class="form-control phone_with_ddd" name="telefone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o telefone">
                        </div>

                    
                        <button type="submit" class="btn btn-danger">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
