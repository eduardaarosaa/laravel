@extends('template.template-padrao')

@section('padrao')
<div class="container">
    <div class="row">
        <div class='col-md-12'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="text-center">Cadastro de PJ</h3>
                    <form method="POST" action="{{route('cadastro_empresa')}}">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail*</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Razão Social*</label>
                            <input type="text" class="form-control" name="razao" id="exampleInputPassword1" placeholder="Digite a razão social">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CNPJ*</label>
                            <input type="text" class="form-control cnpj" name="cnpj" id="exampleInputPassword1" name='cnpj' placeholder="Digite seu CNPJ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Objeto Social*</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="obj.social" placeholder="Digite o objeto social">
                            <small>Descreva a atividade da empresa</small>

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo Societário*</label>
                            <select class="form-control" name="tipo.socio" id="exampleFormControlSelect1">
                                <option value="ltda">LTDA</option>
                                <option value="sa">S.A.</option>
                                <option value="mei">MEI</option>
                                <option value="individual">Empresario Individual</option>
                                <option value="eireli">Eireli</option>
                            </select>
                        </div>
                        <h3 class="text-center">Endereço</h3>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Logradouro*</label>
                                    <input type="text" class="form-control" name="rua" id="rua" placeholder="Digite seu logradouro">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Número*</label>
                                    <input type="number" class="form-control" name="numero" id="exampleInputPassword1" placeholder="Digite seu número">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Bairro*</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite seu bairro">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CEP*</label>
                                    <input type="text" class="form-control cep" id="cep" name="cep" placeholder="Digite seu cep">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Cidade*</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite sua cidade">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Estado*</label>
                                    <input type="text" class="form-control" id="uf" name="estado" placeholder="Digite seu estado">
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