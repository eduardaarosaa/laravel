@extends('template.template-padrao')

@section('padrao')

<div class="container">
    <div class="row">
        <div class='col-md-12'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="text-center">Cadastro de Cliente PF</h3>
                    <form method="POST" action="{{route('pf_date')}}">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail*</label>
                            <input type="email" class="form-control" name="email" required placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome Completo*</label>
                            <input type="text" class="form-control" name="nome" required placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">CPF*</label>
                            <input type="text" class="form-control cpf" name="cpf" required  placeholder="Digite seu cpf">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">É pessoa exposta politicamente (PEP)?*</label>
                            <select class="form-control"  name="pep" id="exampleFormControlSelect1" required>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
    
                            </select>
                        </div>
                        <div>
                        <label for="exampleFormControlSelect1">Faz parte de algum partido político ou associação política?*</label>
                            <select class="form-control" name="partido" id="exampleFormControlSelect1" required>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
    
                            </select>
                        </div>
                        <h3 class="text-center">Endereço</h3>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Logradouro*</label>
                                    <input type="text" class="form-control" name="rua" id="rua" placeholder="Digite seu logradouro" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Número*</label>
                                    <input type="number" class="form-control" name="numero" placeholder="Digite seu número" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Bairro*</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite seu bairro" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">CEP*</label>
                                    <input type="text" class="form-control cep" id="cep" name="cep" placeholder="Digite seu cep" required>
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