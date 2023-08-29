@extends('app')

@section('title', 'Количество пользователей с заданным именем')

@section('content')

<div class="d-flex flex-column align-items-center  mb-3">
    
        <div class="col-md-4">
            <form action="{{route('user.countUsers')}}" method="GET" >
                
                <div class="mb-3 d-flex mt-4">
                    <label for="name" class="form-label mx-3 mt-1">Имя</label>
                    <input type="text" class="form-control mx-3" id="name" name="name" value="{{old('name')}}">
                    <button type="submit" class="btn btn-info">Поиск</button>
                </div>   
                  
                
            </form>
            
        </div>
        <div class="p-2">
            <form action="{{route('user.topName')}}" method="GET" >           
                <div class="mb-3 d-flex">
                    <button type="submit" class="btn btn-info">ТОП-10 популярных имен</button>
                </div>       
            </form>
        </div>
        <div class="p-2">
            <form action="{{route('user.averageAge')}}" method="GET" >           
                <div class="mb-3 d-flex">
                    <button type="submit" class="btn btn-info">Средний возраст пользователей</button>
                </div>       
            </form>
        </div>

</div>


    
</div>

@endsection