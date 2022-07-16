<h1>Show</h1>

<p>{{ $user->id }}</p>
<h4>{{ $user->name }}</h4>


<a href="{{ route('users.edit', $user->id) }}">Editar</a>
<form action="" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Excluir</button>
</form>

