@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>LIVROS</p>
    </div>
    <div class="container">
        <div class="livros">
            <div class="bom-dia">
                <a href="{{ url('livro-2') }}"> <img src="{{ url('assets/img/bom-dia.png') }}" alt=""></a>
            </div>

            <div class="hora-da-papa mt-3">
                <img src="{{ url('assets/img/hora-papa.png') }}" alt="">
            </div>


        </div>
    </div>
@endsection
