@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>CONTATOS</p>
    </div>
    <div class="icones">
        <div class="d-flex">
            <div class="icone">
                <img src="{{ url('assets/img/icones/whatsapp.png') }}" alt="">
            </div>
            <div class="icone">
                <img src="{{ url('assets/img/icones/phone.png') }}" alt="">
            </div>
            <div class="icone">
                <img src="{{ url('assets/img/icones/email.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="titulo">
        <p>REDES SOCIAIS</p>
    </div>
@endsection
