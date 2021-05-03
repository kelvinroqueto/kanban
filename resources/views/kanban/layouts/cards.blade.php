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
                            <!-- se tiver curso -->
                            @foreach($cardsList['Demanda'] as $card)
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

                                    <a class="pull-right" onclick="obterCartaoPorId({{$card['id_card']}})"  style="margin-right: 10px">
                                        <span class="glyphicon glyphicon-eye-open"></span> Visualizar
                                    </a>

                                </div>
                            </div>
                            @endif
                            @endforeach
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

                            <? include './cards.php'; ?>

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
                                    @if(isset($cardsList['Em Conferencia']))
                                    {{count($cardsList['Em Conferencia'])}}
                                    @else
                                    0
                                    @endif


                                </span>

                            </p>
                        </div>
                        <div id="cards-em-conferencia" class="panel-body">

                            <? include './cards.php'; ?>

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

                            <? include './cards.php'; ?>

                        </div>
                    </div>

                </div>
