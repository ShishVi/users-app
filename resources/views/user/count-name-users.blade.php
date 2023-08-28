@extends('app')

@section('title', 'Количество пользователей с именем', $name)

@section('content')

<div class="row justify-content-md-center">
    <div class="col-md-8 mt-4 text-center">
        <h4>Пользователей с именем {{$name}} - {{$count}} чел.</h4>
        
    </div>
</div>

@endsection