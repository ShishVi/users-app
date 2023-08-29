@extends('app')

@section('title', 'Самые популярные имена')

@section('content')

<div class="row justify-content-md-center">
    <div class="col-md-8 mt-4 text-center">
        <h4>Список ТОП-10 самых популярных имен</h4>
        <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Имя пользователя</th>
                <th scope="col">Количество</th>                
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->total}}</td>                
                    </tr> 
                @endforeach             
            </tbody>
          </table>
        
    </div>
</div>

@endsection