
    <h1 class="bg-dark text-white p-3 mt-5 text-center">Novo Usuario</h1>

    @if($errors->any())
        <div >
            @foreach($errors->all() as $error)
                {{ $error }}
                <br>
            @endForeach
        </div>
    @endIf

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="avatar" class="form-label">Selecione sua Foto ou avatar</label>
            <input type="file" name="avatar" id="avatar" class="form-control form control-md">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>


        <div class="mb-3">
          <label for="birthDate" class="form-label">Data de Nascimento</label>
          <input type="date" name="birthDate" class="form-control" id="birthDate">
        </div>

        <div class="mb-3">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" name="cpf" class="form-control" id="cpf">
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Telefone</label>
          <input type="text" name="phone" class="form-control" id="phone">
        </div>

        <div class="mb-3">
          <label for="profession" class="form-label">Profissão</label>
          <input type="text" name="profession" class="form-control" id="profession">
        </div>

        <div class="mb-3">
          <label for="formation" class="form-label">Formação</label>
          <input type="text" name="formation" class="form-control" id="formation">
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Endereço</label>
          <input type="text" name="address" class="form-control" id="address">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>


        <button type="submit" class="btn btn-primary">Criar</button>
    </form>

