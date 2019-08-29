@extends('template.template-padrao')


@section('padrao')
<div class="container">
    <div class="row">
        <div class='col-md-12'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="text-center">Informações da empresa</h3>
                    <form method="POST" id="filenames" name="filenames" action="{{route('cadastro_info')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <br>
                                <p id="message"><b>Contrato social *</b></p>

                                <input type="file" id="inputeste2" name="contrato" multiple />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>
                            <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Cartão CNPJ - Receita Federal</b></p>

                                <input type="file" id="inputeste2" name="filenames[]" multiple />


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

                                <input type="file" id="inputeste2" name="filenames[]" multiple />


                                <iframe style="display:none" name="iframe"></iframe>
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="dynamicDiv2">
                                <p id="message"><b>Balancete</b></p>

                                <input type="file" id="inputeste2" name="filenames[]" multiple />


                                <iframe style="display:none" id="ok" name="iframe"></iframe>
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
<script>
    var form = document.getElementById('upload');
    var request = new XMLHttpRequest();

    form.addEventListener('submit', function(e)){
        e.preventeDefault();
        var formdata = new FormData(form);

        request.open('post', '/upload');
        request.addEventListener("load", transferComplete);
        request.send(formdata);
    }

    function transferComplete(data){
      response = JSON.parse(data.currentTarget.response);
      if(response.success){
          document.getElementById('ok') = "Ok";
      }
    }
</script>

