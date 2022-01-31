@extends('layouts.layout')
@section('content')

    <form method="post" action="/thingupdate/{{$things->id}}"> 
        @csrf

        <h1>Изменение вещи</h1>
        <div>
            <input type="text" name="name" id="name" placeholder="Введите название" value="{{$things->name}}"><br><br><br>
            <label for="description">Описание</label><br>
            <input type="text" name="description" id="description" value="{{$things->description}}"><br><br><br>
            <label for="wrnt">Срок годности до</label><br>
            <input type="text" name="wrnt" id="wrnt" value="{{$things->wrnt}}"><br><br><br>
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection