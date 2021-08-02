@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="bom-dia-single mt-5">
            <img src="{{ url('assets/img/hora-papa.png') }}" alt="">
        </div>
        <div class="precos">
            <div class="nome-livro mt-3">
                <span class="btn">LIVRO HORA DA PAPA</span>
            </div>
            <div class="nome-livro mt-3">
                <span>VALOR 9,90</span>
            </div>
            <div class="mt-3">
                <button class="btn btn-comprar">COMPRAR</button>
            </div>
        </div>
    </div>
@endsection
