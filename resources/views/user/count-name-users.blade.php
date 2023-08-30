@extends('app')

@section('title', 'Количество пользователей с именем', $name)

@section('content')

<div class="card my-4">
    <div class="card-header">
      Результат поиска
    </div>
    <div class="card-body">
      <h5 class="card-title">Пользователей с именем {{$name}} - {{$count}} чел.</h5>      
      <a href="{{route('app.main')}}" class="btn btn-primary mt-4">Назад</a>
    </div>
</div>

@endsection