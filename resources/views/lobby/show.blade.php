@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lobby # {{$lobby->id}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lobby.list') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Карта:</strong>
                {{ $lobby->map->name }}
            </div>
        </div>
    </div>

    <div>
        <table>
            <tr>
                <td>
                    <div align="left">
                        <strong>Команда 1</strong>
                        <table class="table table-bordered">
                            <tr>
                                <th>Игрок</th>
                                <th>Оперативник</th>
                                <th>Расходники, улучшения</th>
                            </tr>

                            @for($i = 1; $i <=4; $i++)
                                <tr>
                                    <td>Player {{$i}}</td>
                                    <td>Operative Name/Role Icon</td>
                                    <td>Иконки улучшений, расходников (?)</td>
                                </tr>
                            @endfor
                        </table>

                        <strong>Команда 1</strong>
                        <table class="table table-bordered">
                            <tr>
                                <th>Игрок</th>
                                <th>Оперативник</th>
                                <th>Расходники, улучшения</th>
                            </tr>

                            @for($i = 1; $i <=4; $i++)
                                <tr>
                                    <td>Player {{$i}}</td>
                                    <td>Operative Name/Role Icon</td>
                                    <td>Иконки улучшений, расходников (?)</td>
                                </tr>
                            @endfor
                        </table>
                    </div>
                </td>
                <td class="border" width="400">
                    <div style="height: 400px"><strong> Модель выбранного оперативника</strong></div>

                    <div style="position:inherit;bottom:-1px" class="table table-bordered">Блок переключаемых улучшений, расходников</div>
                    <div style="position:inherit;bottom:-1px" class="table table-bordered">Кнопка кастомизации</div>
                </td>
            </tr>
        </table>
    </div>


    </div>

@endsection
