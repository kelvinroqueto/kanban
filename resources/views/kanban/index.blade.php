        @extends('kanban.layouts.template')
@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">Curso</label>
                        <select id="select-filtro-curso"  onchange="filter()" title="Cursos" class="form-control selectpicker" multiple  data-live-search="true" data-actions-box="true" data-width="100%">
                            @foreach($listaCursosas $idCurso => $course)
                            <option value="{{$idCurso}}">{{$course}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-2 col-md-1">
                    <div class="form-group">
                        <label class="control-label">Nº Aula</label>
                        <select id="select-filtro-num-aula" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">Professor</label>
                        <div class="input-group">
                            <input id="input-filtro-professor" type="text" class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-search"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label">Ordenar por</label>
                        <select id="select-filtro-ordenar-por" class="form-control">
                            <option value="ano">Ano</option>
                            <option value="curso">Curso</option>
                            <option value="professor">Professor</option>
                            <option value="num-aula">Nº Aula</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label">&nbsp;</label>
                        <select id="select-filtro-ordenar-por" class="form-control">
                            <option value="asc">Crescente</option>
                            <option value="desc">Decrescente</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row card-colunas" id="card-colunas">
<?php echo $html ?>
            </div>

        </div>

<div id="form-card" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="form-card" aria-hidden="true">
    <div class="modal-dialog modal-fluid">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Visualização do Card</h4>
            </div>
            <div id="conteudo-card-form">

        </div>
        </div>
    </div>
</div>

<script>
               function obterCartaoPorId(idCard) {

                                                        var dialog = bootbox.dialog({
                                                        title: 'Aguarde um momento, carregando informações...',
                                                                message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>'
                                                        });
                                                        $.ajax({
                                                        type: "GET",
                                                                dataType: "json",
                                                                url: `card/${idCard}`,
                                                                success: function (conteudo) {
                                                                    if(conteudo){
                                                                        $('#conteudo-card-form').html(conteudo);
                                                                        $('#form-card').modal('show');
                                                                    }else{
                                                                        bootbox.dialog({
                                                        title: 'Erro',
                                                                message: 'Erro ao localizar Card'
                                                        });
                                                                    }
                                                                dialog.modal('hide');
                                                                }
                                                        });
                                                        }

                                                        function filter() {
                                                            $('#card-colunas').html('')
var dialog = bootbox.dialog({
title: 'Aguarde um momento, carregando informações...',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>'
});
$.ajax({
type: "post",
        dataType: "json",
        url: 'cards',
        data: {
            _token: "{{ csrf_token() }}",
            cursos: $('#select-filtro-curso').val(),
        },
        success: function (conteudo) {
            if(conteudo){
                $('#card-colunas').html(conteudo);
            }else{
                bootbox.dialog({
title: 'Erro',
        message: 'Erro!'
});
            }
        dialog.modal('hide');
        }
});
}
    </script>
        @endsection
