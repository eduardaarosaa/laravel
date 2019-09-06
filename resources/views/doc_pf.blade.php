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

                                <input type="file" id="inputeste2" name="images[]" multiple required/>


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Selfie (autorretrato) com documento*</b></p>

                                <input type="file" id="inputeste2" name="images[]" multiple required />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Comprovante de endereço*</b></p>

                                <input type="file" id="inputeste2" name="images[]" multiple required />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                        
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contato *
                            </label>
                            <input type="text" class="form-control phone_with_ddd" name="telefone" placeholder="Digite o telefone" required>
                        </div>

                    
                        <button type="submit" class="btn btn-danger">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
