@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="hora-papa-single mt-5">
            <img src="{{ url('assets/img/bom-dia.png') }}" alt="">
        </div>
        <div class="precos">
            <div class="nome-livro mt-3">
                <span class="btn">LIVRO BOM DIA</span>
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
