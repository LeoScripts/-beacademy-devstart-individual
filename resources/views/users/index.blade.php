@extends('template.index')
@section('title', 'Listagem de Usuarios')
@section('main')


    <h1 class="text-center">Listagem de Usuarios</h1>

    @foreach($users as $user)



    <img width="100" src="{{ 'http://localhost:8000/storage/'.$user->avatar }}" alt="">
    <h4>{{ $user->name }}</h4>

        <a href="{{ route('users.show', $user->id) }}">Visualizar</a>

    @endForeach

@endSection
