@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>SOBRE A AUTORA</p>
    </div>
    <div class="foto-lia">
        <img src="{{ url('assets/img/foto_lia.png') }}" alt="">
    </div>
    <div class="container">
        <div class="texto">
            <p>Noa está desde cedo envolvida no mundo das artes.
            <p>Aos 6 anos ingressou no ballet clássico pela Royal Academy of Dancing.</p>
            <p> Aos 10 começou a ter aulas de violino.</p>
            <p>Poesia, essa acompanha-a desde sempre.</p>
            <p>Cantora e compositora, dos álbuns "As coisas boas" de 2015 e "Cicatriz"
                de 2018, prepara-se para apresentar a terceira obra.
            </p>
            <p> Mestre em Literatura Portuguesa pela Faculdade de Letras da
                Universidade do Porto. Foi mãe há 2 anos de uma menina chamada Luz.
            </p>
            <p class="texto-final">
                Esta nova fase inspirou-a para escrever uma
                coleção de 6 livros infantis de carácter pedagógico chamada "O Mundo da Luzinha".
            </p>
        </div>
    </div>
@endsection
