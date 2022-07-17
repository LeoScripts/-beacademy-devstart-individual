@extends('template.index')
@section('title', 'Listagem de Usuarios')
@section('main')


    <h1 class="text-center ">Listagem de Usuarios</h1>

    <div class="d-flex justify-content-center">
        <table class="table table-striped">
            <thead class="bg-info text-center">
                <tr >
                    <th class="py-3">imagem</th>
                    <th class="py-3">id</th>
                    <th class="py-3">Nome</th>
                    <th class="py-3">Profissao</th>
                    <th class="py-3">email</th>
                    <th class="py-3">telefone</th>
                    <th class="py-3">Ações</th>
                </tr>
            </thead>
            <tbody class="text-center align-items-center">
                @foreach($users as $user)
                    <tr>
                        <td class="px-3 py-2 ">
                            <img class="rounded-circle" width="38" height="40" src="{{ 'http://localhost:8000/storage/'.$user->avatar }}" alt="">
                        </td>
                        <td class="px-3 py-2">{{ $user->id }}</td>
                        <td class="px-3 py-2">{{ $user->name }}</td>
                        <td class="px-3 py-2">{{ $user->profession }}</td>
                        <td class="px-3 py-2">{{ $user->email }}</td>
                        <td class="px-3 py-2">{{ $user->phone }}</td>
                        <td class="px-3 py-2"><a class="btn btn-primary text-white" style="text-decoration:none;" href="{{ route('users.show', $user->id) }}">Visualizar</a></td>
                    </tr>
                @endForeach
            </tbody>
        </table>
    </div>

@endSection
