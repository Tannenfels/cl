@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Пользовательские лобби</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lobby.create') }}"> Создать новое лобби</a>
            </div>
        </div>
    </div>


    <table class="table table-bordered">
        <tr>
            <th>Создатель лобби</th>
            <th>Карта</th>
            <th>Настройки карты </th>
        </tr>

        @foreach ($lobbies as $lobby)
            <tr>
                <td>Player 1</td>
                <td>Map</td>
                <td>
                    По паролю: <input type="checkbox" @if(!empty($lobby->password)) checked @endif disabled>
                    ЭР: <input type="checkbox" @if($lobby->is_etalon_mode == 1) checked @endif disabled>
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('show',$lobby->id) }}">Войти</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{--{!! $lobbies->links() !!}--}}

@endsection
