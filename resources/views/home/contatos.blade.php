@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>CONTATOS</p>
    </div>
    <div class="icones">
        <div class="d-flex">
            <div class="icone">
                <a href="#">
                    <img src="{{ url('assets/img/icones/whatsapp.png') }}" alt="">
                </a>
            </div>
            <div class="icone">
                <a href="#">
                    <img src="{{ url('assets/img/icones/phone.png') }}" alt="">
                </a>
            </div>
            <div class="icone">
                <a href="#">
                    <img src="{{ url('assets/img/icones/email.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="titulo">
        <p>REDES SOCIAIS</p>
    </div>
    <div class="icones">
        <div class="d-flex">
            <div class="icone">
                <a href="#">
                    <img src="{{ url('assets/img/redes/instagram.png') }}" alt="">
                </a>
            </div>
            <div class="icone">
                <a href="#">
                    <img src="{{ url('assets/img/redes/facebook.png') }}" alt="">
                </a>
            </div>
            <div class="icone">
                <a href="#">
                    <img src="{{ url('assets/img/redes/youtube.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection
