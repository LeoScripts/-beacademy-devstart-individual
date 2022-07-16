@extends('template.index')
@section('title', 'Listagem de Usuarios')
@section('main')

<h1>Show</h1>

<p>{{ $user->id }}</p>
<h4>{{ $user->name }}</h4>
<img class="rounded-circle mx-auto d-block p-2" width="200" src="{{ 'http://localhost:8000/storage/'.$user->avatar }}" alt="">


<a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">Editar</a>
<form  action="{{ route('users.destroy', $user->id) }}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" type="submit">Excluir</button>
</form>

@endSection
