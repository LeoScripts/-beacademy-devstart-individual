@extends('template.index')
@section('title', 'Listagem de Usuarios')
@section('main')
    <main class="antialiased">
        <h1 align='center'>
            Seja Bem Vindo ao
            <strong style='
                background: #1995;
                padding: 1rem;
                border-radius: 0.5rem;
            '>
                Person-System
            </strong>
        </h1>

        <section style="
            display:flex;
            align-items:center;
            justify-content:center;
        ">

            <div style="
                align-items:center;
                justify-content:center;
                background:#1995;
                padding:1rem 2rem 3rem 2rem;
                border-radius:1rem;
                margin: 2rem 0 1rem 0;
            ">
                <h2 align="center">Login</h2>
                <form action="/" >
                    <div>
                        <label for="email">Email</label>
                        <input type="text" id='email' name="email">
                    </div>

                    <div>
                        <label for="password">Senha</label>
                        <input type="text" id='password' name="password">
                    </div>

                    <button type="submit" style="
                        width: 100%;
                        padding: 0.5rem;
                        border-radius: 0.5rem;
                        margin: 0.5rem 0 0 0;
                    ">Enviar
                    </button>
                </form>
            </div>

        </section>

</main>

@endSection
