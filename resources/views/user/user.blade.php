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
        
        <div class="p-2">
            <h4 class="text-center my-3 ms-3">Поиск пользователей по возрасту</h4>
            <form action="{{route('user.numberAge')}}" method="GET" >           
                
                    <div class="mb-3">
                        <input type="number" class="form-control mx-3" id="age_min" name="age_min" value="{{old('age_min')}}" placeholder="Введите возраст от">
                    </div>
                    @error('age_min')
                    <small class="text-danger ms-3">{{$message}}</small>
                    @enderror
                    <div class="mb-3">
                        <input type="number" class="form-control mx-3" id="age_max" name="age_max" value="{{old('age_max')}}" placeholder="Введите возраст до">
                    </div>
                    @error('age_max')
                    <small class="text-danger ms-3">{{$message}}</small>
                    @enderror
                    <div>
                        <button type="submit" class="btn btn-info ms-3">Поиск</button>
                    </div>                
                    
                      
            </form>
        </div>

</div>


    
</div>

@endsection