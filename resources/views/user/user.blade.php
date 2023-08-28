@extends('app')

@section('title', 'Количество пользователей с заданным именем')

@section('content')

<div class="row justify-content-md-center">
    <div class="col-md-4 mt-4">
        <form action="{{route('user.countUsers')}}" method="GET" >
            
            <div class="mb-3 d-flex">
                <label for="name" class="form-label mx-3 mt-1">Имя</label>
                <input type="text" class="form-control mx-3" id="name" name="name" value="{{old('name')}}">
                <button type="submit" class="btn btn-info">Поиск</button>
            </div>   
              
            
        </form>
        
    </div>
</div>

@endsection