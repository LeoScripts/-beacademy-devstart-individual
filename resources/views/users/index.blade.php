<h1>Listagem de Usuarios</h1>

@foreach($users as $user)

    <h4>{{ $user->name }}</h4>
    <img width="100" src="{{ 'http://localhost:8000/storage/'.$user->avatar }}" alt="">

@endForeach
