@extends('template.index')
@section('title', 'Listagem de Usuarios')
@section('main')




<div class="d-flex justify-content-center">
    <div>
        <img class="rounded-circle mx-auto d-block p-2" width="195" height="200" src="{{ 'http://localhost:8000/storage/'.$user->avatar }}" alt="">
        <h4 class="text-center">{{ $user->name }}</h4>

        <div class="d-flex justify-content-center gap-3">
            <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">Editar</a>
            <form  action="{{ route('users.destroy', $user->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Excluir</button>
            </form>
        </div>
    </div>
</div>
<div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" disabled value="{{ $user->email }}">
    </div>

    <div class="mb-3">
        <label for="birthDate" class="form-label">Data de Nascimento</label>
        <input type="date" name="birthDate" class="form-control" id="birthDate" disabled value="{{ $user->birthDate }}">
    </div>

    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" class="form-control" id="cpf" disabled value="{{ $user->cpf }}">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Telefone</label>
        <input type="text" name="phone" class="form-control" id="phone" disabled value="{{ $user->phone }}">
    </div>

    <div class="mb-3">
        <label for="profession" class="form-label">Profissão</label>
        <input type="text" name="profession" class="form-control" id="profession" disabled value="{{ $user->profession }}">
    </div>

    <div class="mb-3">
        <label for="formation" class="form-label">Formação</label>
        <input type="text" name="formation" class="form-control" id="formation" disabled value="{{ $user->formation }}">
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Endereço</label>
        <input type="text" name="address" class="form-control" id="address" disabled value="{{ $user->address }}">
    </div>
</div>



@endSection
