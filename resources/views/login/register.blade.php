@extends('layouts.login')

@section('content')
    <div class="faca-registo">
        <p>FAÇA SEU REGISTO</p>
    </div>

    <div class="mt-5 text-center ">
        <form action="">
            <div class="input-container mt-3">
                <input id="name" class="input" type="text" pattern=".+" required />
                <label class="label" for="name">SEU NOME</label>
            </div>
            <div class="input-container mt-3">
                <input id="nome-crianca" class="input" type="text" pattern=".+" required />
                <label class="label" for="nome-crianca">NOME DA CRIANÇA</label>
            </div>
            <div class="input-container mt-3">
                <input id="email-1" class="input" type="email" pattern=".+" required />
                <label class="label" for="email-1">E-MAIL</label>
            </div>
            <div class="input-container mt-3">
                <input id="senha" class="input" type="password" pattern=".+" required />
                <label class="label" for="senha">SENHA</label>
            </div>
            <div class="input-container mt-3">
                <input id="senha2" class="input" type="password" pattern=".+" required />
                <label class="label" for="senha2">REPETIR SENHA</label>
            </div>
            <div class="mt-3">
                <button class="btn btn-login">REGISTO</button>
            </div>
            <div class="mt-2 first-acess">
                <a href="#">JA TEM LOGIN?</a>
            </div>
        </form>
    </div>


@endsection
