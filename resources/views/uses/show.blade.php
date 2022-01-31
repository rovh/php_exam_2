@extends('layouts.layout')
@section('content')
    <br>
    <a href="/givething">Передать вещь</a>
    @foreach($uses as $use)
    <!-- @foreach($things as $thing) -->
    <br><br><br>
    <ul>
        <!-- @if($thing->master == auth()->user()->id)
        <label>Это ваша вещь</label>
        @else
        @endif -->
        <li>Идентификатор вещи: {{$use->thing_id}}</li>
        <li>Идентификатор места: {{$use->place_id}}</li>
        <li>Идентификатор пользователя: {{$use->user_id}}</li>
        <li>Количество вещей: {{$use->amount}}</li>
    </ul>
    <a href="/updateuse/{{$use->id}}">Изменить использование</a>
    <br><br><br><br><br>
    @endforeach



@endsection