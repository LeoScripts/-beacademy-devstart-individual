@extends('template.index')
@section('title', 'Listagem de Usuarios')
@section('main')

<h1 class="text-center">Editar Usuario</h1>
@if($errors->any())
<div >
    @foreach($errors->all() as $error)
    {{ $error }}
    <br>
    @endForeach
</div>
@endIf

<form action="{{ route('users.update', $user->id) }}" method="post" enctype= multipart/form-data>
@method('PUT')
@csrf

        <div class="mb-3">
            <img width="97" height="100"  class="rounded-circle mx-auto d-block p-2" src="{{ 'http://localhost:8000/storage/'.$user->avatar }}" alt=""> <br>
            <label for="avatar" class="form-label">Imagem</label>
            <input style="" type="file" name="avatar" id="avatar" class="form-control form control-md" placeholder="Selecione">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}">
        </div>

        <div class="mb-3">
          <label for="birthDate" class="form-label">Data de Nascimento</label>
          <input type="date" name="birthDate" class="form-control" id="birthDate" value="{{ $user->birthDate }}">
        </div>

        <div class="mb-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" name="cpf" class="form-control" id="cpf" value="{{ $user->cpf }}">
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Telefone</label>
          <input type="text" name="phone" class="form-control" id="phone" value="{{ $user->phone }}">
        </div>

        <div class="mb-3">
          <label for="profession" class="form-label">Profissão</label>
          <input type="text" name="profession" class="form-control" id="profession" value="{{ $user->profession }}">
        </div>

        <div class="mb-3">
          <label for="formation" class="form-label">Formação</label>
          <input type="text" name="formation" class="form-control" id="formation" value="{{ $user->formation }}">
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Endereço</label>
          <input type="text" name="address" class="form-control" id="address" value="{{ $user->address }}">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endSection
