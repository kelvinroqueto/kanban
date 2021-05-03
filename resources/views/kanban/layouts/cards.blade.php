                <div class="col-sm-6 col-md-3">
                    <!-- DEMANDA -->
                    <!-- *************************************************** -->
                    <div class="panel panel-primary coluna">
                        <div class="panel-heading">
                            <p class="panel-title">
                                Demanda
                                <span class="badge badge-num-cards">
                                        @if(isset($cardsList['Demanda']))
                                        {{count($cardsList['Demanda'])}}
                                        @else
                                        0
                                        @endif
                                </span>
                            </p>
                        </div>
                        <div id="cards-demanda" class="panel-body">
                            @isset($cardsList['Demanda'])
                            @foreach($cardsList['Demanda'] as $card)
                            <div class="panel panel-default card {{$card['id_curso'] == null ? 'aulao' : ''}}">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            @if($card['id_curso'] == null)
                                            <h5>AULÃO</h5>
                                            @else
                                            <h5>{{$card['curso']['curso']}}</h5>
                                            @endif
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
                                            @if($card['status']['status'] != 'Conferido')
                                            <li><a href="" onclick="prosseguir({{$card['id_card']}});return false;">&raquo; Prosseguir</a></li>
                                            @endif
                                            <li role="separator" class="divider"></li>
                                            @if($card['status']['status'] != 'Demanda')
                                            <li><a href="" onclick="voltar({{$card['id_card']}});return false;">&laquo; Voltar</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <a  onclick="obterCartaoPorId({{$card['id_card']}})" class="pull-right"  style="margin-right: 4px">
                                        <span class="glyphicon glyphicon-eye-open"></span> Visualizar
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <!-- MATERIAL RECEBIDO -->
                    <!-- *************************************************** -->
                    <div class="panel panel-info coluna">
                        <div class="panel-heading">
                            <p class="panel-title">
                                Material Recebido
                                <span class="badge badge-num-cards">
                                        @if(isset($cardsList['Material Recebido']))
                                        {{count($cardsList['Material Recebido'])}}
                                        @else
                                        0
                                        @endif
                                </span>
                            </p>
                        </div>
                        <div id="cards-material-recebido" class="panel-body">
                            @isset($cardsList['Material Recebido'])
                            @foreach($cardsList['Material Recebido'] as $card)
                            <div class="panel panel-default card {{$card['id_curso'] == null ? 'aulao' : ''}}">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            @if($card['id_curso'] == null)
                                            <h5>AULÃO</h5>
                                            @else
                                            <h5>{{$card['curso']['curso']}}</h5>
                                            @endif
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
                                            @if($card['status']['status'] != 'Conferido')
                                            <li><a href="" onclick="prosseguir({{$card['id_card']}});return false;">&raquo; Prosseguir</a></li>
                                            @endif
                                            <li role="separator" class="divider"></li>
                                            @if($card['status']['status'] != 'Demanda')
                                            <li><a href="" onclick="voltar({{$card['id_card']}});return false;">&laquo; Voltar</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <a  onclick="obterCartaoPorId({{$card['id_card']}})" class="pull-right"  style="margin-right:4px">
                                        <span class="glyphicon glyphicon-eye-open"></span> Visualizar
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <!-- EM CONFERÊNCIA -->
                    <!-- *************************************************** -->
                    <div class="panel panel-danger coluna">
                        <div class="panel-heading">
                            <p class="panel-title">
                                Em Conferência
                                <span class="badge badge-num-cards">
                                    @if(isset($cardsList['Em Conferência']))
                                    {{count($cardsList['Em Conferência'])}}
                                    @else
                                    0
                                    @endif
                                </span>
                            </p>
                        </div>
                        <div id="cards-em-conferencia" class="panel-body">

                        @isset($cardsList['Em Conferência'])
                         @foreach($cardsList['Em Conferência'] as $card)
                         <div class="panel panel-default card {{$card['id_curso'] == null ? 'aulao' : ''}}">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-xs-9">
                                            @if($card['id_curso'] == null)
                                            <h5>AULÃO</h5>
                                            @else
                                            <h5>{{$card['curso']['curso']}}</h5>
                                            @endif
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
                                            @if($card['status']['status'] != 'Conferido')
                                            <li><a href="" onclick="prosseguir({{$card['id_card']}});return false;">&raquo; Prosseguir</a></li>
                                            @endif
                                            <li role="separator" class="divider"></li>
                                            @if($card['status']['status'] != 'Demanda')
                                            <li><a href="" onclick="voltar({{$card['id_card']}});return false;">&laquo; Voltar</a></li>
                                            @endif
                                        </ul>
                                    </div>

                                    <a  onclick="obterCartaoPorId({{$card['id_card']}})" class="pull-right"  style="margin-right:4px">
                                        <span class="glyphicon glyphicon-eye-open"></span> Visualizar
                                    </a>

                                </div>
                            </div>
                            @endforeach
                            @endisset
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-3">

                    <!-- CONFERIDO -->
                    <!-- *************************************************** -->

                    <div class="panel panel-success coluna">
                        <div class="panel-heading">
                            <p class="panel-title">
                                Conferido
                                <span class="badge badge-num-cards">
                                        @if(isset($cardsList['Conferido']))
                                        {{count($cardsList['Conferido'])}}
                                        @else
                                        0
                                        @endif
                                </span>
                            </p>
                        </div>
                        <div id="cards-conferido" class="panel-body">

                            @isset($cardsList['Conferido'])
                            @foreach($cardsList['Conferido'] as $card)
                            <div class="panel panel-default card {{$card['id_curso'] == null ? 'aulao' : ''}}">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-xs-9">
                                            @if($card['id_curso'] == null)
                                            <h5>AULÃO</h5>
                                            @else
                                            <h5>{{$card['curso']['curso']}}</h5>
                                            @endif
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
                                            @if($card['status']['status'] != 'Conferido')
                                            <li><a href="" onclick="prosseguir({{$card['id_card']}});return false;">&raquo; Prosseguir</a></li>
                                            @endif
                                            <li role="separator" class="divider"></li>
                                            @if($card['status']['status'] != 'Demanda')
                                            <li><a href="" onclick="voltar({{$card['id_card']}});return false;">&laquo; Voltar</a></li>
                                            @endif
                                        </ul>
                                    </div>

                                    <a  onclick="obterCartaoPorId({{$card['id_card']}})" class="pull-right"  style="margin-right:4px">
                                        <span class="glyphicon glyphicon-eye-open"></span> Visualizar
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
