@extends('app')

@section('title', 'Средний возраст пользователей')

@section('content')

<div class="card my-4">
    <div class="card-header">
      Результат поиска
    </div>
    <div class="card-body">
      <h5 class="card-title">Средний возраст пользователей - {{round($age[0]->total)}} года</h5>      
      <a href="{{route('app.main')}}" class="btn btn-primary mt-4">Назад</a>
    </div>
</div>

@endsection