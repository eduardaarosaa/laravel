@extends('template.template-padrao')

@section('padrao')

<div class="container">
    <div class="row">
        <div class='col-md-12'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="text-center">Informações dos Sócios</h3>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do sócio responsável pelas transações*
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CPF do sócio responsável pelas transações*
                            </label>
                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Digite a razão social">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">É pessoa exposta politicamente (PEP)?*</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Faz parte de algum partido político ou associação política?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
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
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nome sócio 1</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CPF Sócio 1</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 1 é pessoa exposta politicamente (PEP)?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 1 faz parte de algum partido político ou associação política?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
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
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CPF Sócio 2</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 2 é pessoa exposta politicamente (PEP)?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 2 faz parte de algum partido político ou associação política?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
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
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CPF Sócio 3*</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 3 é pessoa exposta politicamente (PEP)?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sócio 3 faz parte de algum partido político ou associação política?*
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
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
                            <label for="exampleInputPassword1">Negociações serão feitas através de um intermediador?*

                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Não </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">WhatsApp Comprador ou Intermediador*
*
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                        </div>

                        <button type="submit" class="btn bg-danger">Próxima página</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection