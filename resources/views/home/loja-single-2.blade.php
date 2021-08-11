@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="bom-dia-single">
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
                <a href="https://api.whatsapp.com/send?phone=351910123364&text=Gostaria%20de%20adquirir%20livro%20Hora%20da%20Papa"><button class="btn btn-comprar">COMPRAR</button></a>
            </div>
        </div>
    </div>
@endsection
