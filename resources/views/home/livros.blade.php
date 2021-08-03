@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>LIVROS</p>
    </div>
    <div class="container livros">
        <div class="bom-dia">
           <a href="{{ url('livro-2') }}"> <img src="{{ url('assets/img/bom-dia.png') }}" alt=""></a>
        </div>
<<<<<<< HEAD
<<<<<<< HEAD
        <div class="hora-da-papa mt-3">
            <img src="{{ url('assets/img/hora-papa.png') }}" alt="">
=======
        <div class="hora-da-papa">
            <a href="{{ url('livro-1') }}"><img src="{{ url('assets/img/hora-papa.png') }}" alt=""></a>
>>>>>>> main
=======

        <div class="hora-da-papa">
            <a href="{{ url('livro-1') }}"><img src="{{ url('assets/img/hora-papa.png') }}" alt=""></a>

>>>>>>> main
        </div>

    </div>
@endsection
