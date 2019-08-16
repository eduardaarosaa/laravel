@extends('template.template-padrao')


@section('padrao')
<div class="container">
    <div class="row">
        <div class='col-md-12'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="text-center">Informações da empresa</h3>
                    <form method="POST" action="{{route('cadastro_info')}}">
                         {{ csrf_field() }}
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Contrato social *</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Cartão CNPJ - Receita Federal</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Faturamento*</label>
                            <input type="text" class="form-control money" name="faturamento" id="exampleInputPassword1" placeholder="">
                            <small>Dos últimos 12 meses </small>
                        </div>

                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Balanço Patrimonial</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Balancete</b></p>
                                <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br> -->
                                <input type="file" id="inputeste2" name="file[]" multiple onchange="updatepicture(this);" />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                </div>
                <button type="submit" class="btn btn-danger">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@endsection