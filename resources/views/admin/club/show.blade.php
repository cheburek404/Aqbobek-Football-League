@extends('layouts.app')

@include('admin.layouts.header')

@section('content')

    <a href="{{ route('addClub') }}" class="btn btn-secondary mt-4 mb-4">
        добавить клуб
    </a>

    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Название клуба</th>
                <th>Логотип клуба</th>
                <th>И</th>
                <th>О</th>
                <th>В</th>
                <th>Н</th>
                <th>П</th>
                <th>ЗМ</th>
                <th>ПМ</th>
                <th>РМ</th>
                <th>Опции</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clubs as $club)
            <tr>    
                <th scope="row">{{ $club->id }}</th>
                <td>{{ $club->name }}</td>
                <td><img class="table__img" src="/assets/image/{{ $club->logo }}"></td>
                <td>{{ $club->game }}</td>
                <td>{{ $club->point }}</td>
                <td>{{ $club->win }}</td>
                <td>{{ $club->draw }}</td>
                <td>{{ $club->lose }}</td>
                <td>{{ $club->goals_scored }}</td>
                <td>{{ $club->goals_conceded }}</td>
                <td>{{ $club->goal_difference }}</td>
                <td>    
                    <form method="post" action="{{ route('deleteClub', $club->id) }}" style="margin:0">
                        @csrf 
                        @method('delete')
                        <a href="{{ route('editClub', $club->id) }}" class="btn btn-info me-2">редактировать</a>
                        <button type="submit" class="btn btn-danger">удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection