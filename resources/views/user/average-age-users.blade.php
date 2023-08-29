@extends('app')

@section('title', 'Средний возраст пользователей')

@section('content')

<div class="row justify-content-md-center">
    <div class="col-md-8 mt-4 text-center">
        
        <h4>Средний возраст пользователей - {{round($age[0]->total)}} года </h4>
        
    </div>
</div>

@endsection