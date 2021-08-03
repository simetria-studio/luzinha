@extends('layouts.login')

@section('content')
    <div class="faca-login">
        <p>FAÇA SEU LOGIN</p>
    </div>

    <div class="mt-5 text-center">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-container mt-3">
                <input id="name" class="input" type="text" name="email" pattern=".+" required />
                <label class="label" for="name">EMAIL</label>
            </div>
            <div class="input-container mt-3">
                <input id="name_1" class="input" name="password" type="password" pattern=".+" required />
                <label class="label" for="name_1">SENHA</label>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-login">LOGIN</button>
            </div>
        </form>
        <div class="mt-3 first-acess">
            <a href="{{ route('register') }}">PRIMEIRO ACESSO?</a>
        </div>

    </div>


@endsection
