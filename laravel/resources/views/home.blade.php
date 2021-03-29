@extends('layouts.app')

@section('title','Главная страница')

@section('content')

    <h1>
        Главная страница
    </h1>

@endsection('content')

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
