@extends('layouts.app')

@include('admin.layouts.header')

@section('content')

    <div class="card mt-5">
        <h3>Редактировать клуб</h3>
        
        <form action="{{ route('updateClub', $club->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Название клуба</label>
                    <input type="text" name="name" class="form-control" value="{{ $club->name }}">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Логотип клуба</label>
                    <input type="file" name="logo" class="form-control">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Игры</label>
                    <input type="text" name="game" class="form-control" value="{{ $club->game }}">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Очки</label>
                    <input type="text" name="point" class="form-control" value="{{ $club->point }}">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Выиграши</label>
                    <input type="text" name="win" class="form-control" value="{{ $club->win }}">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Ничьи</label>
                    <input type="text" name="draw" class="form-control" value="{{ $club->draw }}">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Проиграши</label>
                    <input type="text" name="lose" class="form-control" value="{{ $club->lose }}">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Забитые мячи</label>
                    <input type="text" name="goals_scored" class="form-control" value="{{ $club->goals_scored }}">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Пропущенные мячи</label>
                    <input type="text" name="goals_conceded" class="form-control" value="{{ $club->goals_conceded }}">
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <label for="">Разница мячей</label>
                    <input type="text" name="goal_difference" class="form-control" value="{{ $club->goal_difference }}">
                </div>

                <div class="col-12 mt-3">
                    <button class="btn btn-success me-2">Обновить</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Назад</a>
                </div>
            </div>

        </form>
    </div>

@endsection