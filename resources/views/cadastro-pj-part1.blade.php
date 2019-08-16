@extends('template.template-padrao')

@section('padrao')

<div class="container">
    <div class="row">
        <div class='col-md-12'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="text-center">Informações dos Sócios</h3>
                    <!-- <form method="POST" action="{{route('cadastro')}}"> -->
                    {{ csrf_field() }}

                        <div class="form-group">
                        <input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
                            <label for="exampleInputEmail1">Nome do sócio responsável pelas transações*
                            </label>
                            <input type="text" class="form-control" name="name.socio" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite nome do sócio">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CPF do sócio responsável pelas transações*
                            </label>
                            <input type="text" class="form-control cpf" name="cpf.socio1" id="exampleInputPassword1" placeholder="Digite o CPF do sócio">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">É pessoa exposta politicamente (PEP)?*</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pep" id="exampleRadios1" value="sim">
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pep" id="exampleRadios2" value="nao">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Faz parte de algum partido político ou associação política?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="partido" id="exampleRadios1" value="sim" >
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="partido" id="exampleRadios2" value="nao">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Documento de identidade sócio com foto*</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Selfie (autorretrato) do sócio com documento*</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Comprovante de endereço do sócio*</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Procuração*</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <h3 class="text-center">Outros sócios </h3>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nome sócio 1</label>
                                    <input type="text" class="form-control" name="name.socio1" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CPF Sócio 1</label>
                                    <input type="text" class="form-control cpf" name="cpf.socio1" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 1 é pessoa exposta politicamente (PEP)?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pep1" id="exampleRadios1" value="sim">
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pep1" id="exampleRadios2" value="nao">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 1 faz parte de algum partido político ou associação política?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="partido1" id="exampleRadios1" value="sim">
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="partido1" id="exampleRadios2" value="nao">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Documento de identidade do Sócio 1</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Selfie (autorretrato) do Sócio 1 com documento</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Comprovante de endereço do Sócio 1</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nome sócio 2</label>
                                    <input type="text" class="form-control" name="name.socio2" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CPF Sócio 2</label>
                                    <input type="text" class="form-control cpf" name="cpf.socio2" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 2 é pessoa exposta politicamente (PEP)?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pep2" id="exampleRadios1" value="sim">
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pep2" id="exampleRadios2" value="nao">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 2 faz parte de algum partido político ou associação política?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="partido2" id="exampleRadios1" value="sim">
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="partido2" id="exampleRadios2" value="nao">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Documento de identidade do Sócio 2</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Selfie (autorretrato) do Sócio 2 com documento</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Comprovante de endereço do Sócio 2</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nome sócio 3</label>
                                    <input type="text" class="form-control" name="name.socio3" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CPF Sócio 3*</label>
                                    <input type="text" class="form-control cpf" name="cpf.socio3" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 3 é pessoa exposta politicamente (PEP)?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pep3" id="exampleRadios1" value="sim">
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pep3" id="exampleRadios2" value="nao">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 3 faz parte de algum partido político ou associação política?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="partido3" id="exampleRadios1" value="sim">
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="partido3" id="exampleRadios2" value="nao">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Documento de identidade do Sócio 3</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Selfie (autorretrato) do Sócio 3 com documento</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Comprovante de endereço do Sócio 3</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />
                               

                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone do responsável pelas transações*
                            </label>
                            <input type="text" class="form-control phone_with_ddd" name="phone.resp" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu telefone">
                        </div>

                        <button type="submit" class="btn btn-danger">Cadastrar</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection