@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>MÚSICAS PARA ACALMAR O BEBÉ</p>
    </div>
    <div class="musicas">
        <div class="player">
            <h5 class="text-center">Anoitecer para Luz</h5>
            <div class="gap-example">
                <audio>
                    <source src="assets/musica/anoiteceu-para-Luz.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
        <div class="player">
            <h5 class="text-center">Ballade Pour Adeline Para Luz</h5>
            <div class="gap1-example">
                <audio>
                    <source src="assets/musica/ballade-pour-adeline-para-luz.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
        <div class="player">
            <h5 class="text-center">Luz para Luz</h5>
            <div class="gap2-example">
                <audio>
                    <source src="assets/musica/luz-para-luz.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
        <div class="player">
            <h5 class="text-center">Murmures para luz</h5>
            <div class="gap3-example">
                <audio>
                    <source src="assets/musica/murmures-para-luz.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
        <div class="player">
            <h5 class="text-center">Somewhere over the rainbow para luz</h5>
            <div class="gap4-example">
                <audio>
                    <source src="assets/musica/somewhere-over-the-rainbow-para-luz.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>

    </div>

@endsection
