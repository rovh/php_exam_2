@extends('layouts.layout')
@section('content')

    <form method="post" action="/place"> 
        @csrf

        <h1>Создание места</h1>
        <div>
            <label for="description">Введите: Название места</label><br>
            <input type="text" name="name" id="name" placeholder="Введите название"><br><br><br>
            <label for="description">Введите: Описание</label><br>
            <input type="text" name="description" id="description"><br><br><br>
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection