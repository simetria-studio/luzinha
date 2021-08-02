@extends('layouts.main')

@section('content')

    <div class="loja">
        <div class="container">
            <div class="bom-dia-1">
                <div class="mt-3">
                    <img src="{{ url('assets/img/bom-dia.png') }}" alt="">
                </div>
                <div>
                    <button class="btn btn-comprar">COMPRAR</button>
                </div>
            </div>

            <div class="hora-papa">
                <div class="mt-5">
                    <img src="{{ url('assets/img/hora-papa.png') }}" alt="">
                </div>
                <div>
                    <button class="btn btn-comprar">COMPRAR</button>
                </div>
            </div>
        </div>
    </div>
@endsection
