@extends('layouts.layout')
@section('content')
    <br>
    <a href="/creatething">Создать вещь</a>
    @foreach($things as $thing)
    <br><br><br>
    <ul>
        <li>Название вещи: {{$thing->name}}</li>
        <li>Описание: {{$thing->description}}</li>
        <li>Срок годности: {{$thing->wrnt}}</li>
        <li>Идентификатор создателя: {{$thing->master}}</li>
    </ul>
    <a href="/deletething/{{$thing->id}}">Удалить вещь</a>
    <a href="/updatething/{{$thing->id}}">Изменить вещь</a>
    <br><br><br><br><br>
    @endforeach



@endsection