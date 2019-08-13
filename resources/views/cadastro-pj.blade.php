@extends('template.template-padrao')

@section('padrao')
<div class="container">
    <div class="row">
        <div class='col-md-12'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="text-center">Cadastro de PJ</h3>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail*</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Razão Social*</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite a razão social">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CNPJ*</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu CNPJ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Objeto Social*</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite o objeto social">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo Societário*</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>LTDA</option>
                                <option>S.A.</option>
                                <option>MEI</option>
                                <option>Empresario Individual</option>
                                <option>Erieli</option>
                            </select>
                        </div>
                        <h3 class="text-center">Endereço</h3>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Logradouro*</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu logradouro">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Número*</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Digite seu logradouro">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Bairro*</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu bairro">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CEP*</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Digite seu cep">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Cidade*</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu bairro">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Estado*</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Digite seu cep">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn bg-danger">Próxima página</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection