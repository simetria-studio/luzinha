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
                <a href="https://api.whatsapp.com/send?phone=55351910123364&text=Ol%C3%A1%2C%20gostaria%20de%20adquirir%20o%20livro.%20LIVRO%20HORA%20DA%20PAPA"><button class="btn btn-comprar">COMPRAR</button></a>
            </div>
        </div>
    </div>
@endsection
