@component('content-card')
@foreach({{$listaCards['Demanda']}} as $card)
@if(isset($card['id_curso']))
<div class="panel panel-default card">
    <div class="panel-body">

        <div class="row">
            <div class="col-xs-9">
                <h5>{{$card['curso']['curso']}}</h5>
                <div class="wrapper-professores">
                    @foreach($card['professores'] as $professor)
                    <span class="label">{{$professor['nome']}}</span>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-3 text-right">
                <span class="label label-primary label-num-aula">A{{$card['num_aula']}}</span>
                <span class="label label-success label-ano">2019</span>
            </div>
        </div>

    </div>
    <div class="panel-footer">

        <!-- OS ÍCONES VÊM DA TABELA "material" DO BANCO DE DADOS -->
        @foreach($card['materiais'] as $material)
            <span class="glyphicon {{$material['icone']}}" data-toggle="tooltip" data-placement="top" title="{{$material['material']}}" style="margin-right: 6px"></span>
            @endforeach

        <div class="dropdown pull-right">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-move"></span>
                Mover <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li class="dropdown-header">Ações</li>
                <li role="separator" class="divider"></li>
                <li><a href="#">&raquo; Prosseguir</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">&laquo; Voltar</a></li>
            </ul>
        </div>

        <a  onclick="obterCartaoPorId({{$card['id_card']}})" class="pull-right"  style="margin-right: 10px">
            <span class="glyphicon glyphicon-eye-open"></span> Visualizar
        </a>

    </div>
</div>
@else
<div class="panel panel-default card aulao">
    <div class="panel-body">

        <div class="row">
            <div class="col-xs-9">
                <h5>AULÃO</h5>
                <div class="wrapper-professores">
                    @foreach($card['professores'] as $professor)
                    <span class="label">{{$professor['nome']}}</span>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-3 text-right">
                <span class="label label-primary label-num-aula">A{{$card['num_aula']}}</span>
                <span class="label label-success label-ano">{{$card['ano']}}</span>
            </div>
        </div>

    </div>
    <div class="panel-footer">

        <!-- OS ÍCONES VÊM DA TABELA "material" DO BANCO DE DADOS -->
        @foreach($card['materiais'] as $material)
            <span class="glyphicon {{$material['icone']}}" data-toggle="tooltip" data-placement="top" title="{{$material['material']}}" style="margin-right: 6px"></span>
            @endforeach

        <div class="dropdown pull-right">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-move"></span>
                Mover <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li class="dropdown-header">Ações</li>
                <li role="separator" class="divider"></li>
                <li><a href="#">&raquo; Prosseguir</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">&laquo; Voltar</a></li>
            </ul>
        </div>

        <a class="pull-right" onclick="obterCartaoPorId({{$card['id_card']}})"  style="margin-right: 10px">
            <span class="glyphicon glyphicon-eye-open"></span> Visualizar
        </a>

    </div>
</div>
@endif
@endforeach
@endcomponent

