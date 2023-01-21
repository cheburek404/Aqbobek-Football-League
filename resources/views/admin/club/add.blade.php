@extends('layouts.app')

@include('admin.layouts.header')

@section('content')

    <div class="card mt-5">
        <h3>Добавить клуб</h3>
        <form action="{{ route('createClub') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="">Название клуба</label>
            <input type="text" class="form-control mb-3" name="name" required>

            <label for="">Логотип клуба</label>
            <input type="file" class="form-control mb-3" name="logo" required>

            <button type="submit" class="btn btn-success mt-2 me-2">Сохранить</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary mt-2">Назад</a>
        </form>
    </div>

@endsection