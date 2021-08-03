@extends('layouts.main')

@section('content')

    <div class="loja">
        <div class="container">
            <div class="bom-dia-1 mt-3">
                <div class="text-center">
                    <img src="{{ url('assets/img/bom-dia.png') }}" alt="">
                </div>
                <div>
                 <a href="{{ url('produto-1') }}">  <button class="btn btn-comprar">COMPRAR</button></a>
                </div>
            </div>

            <div class="hora-papa mt-3">
                <div class=" text-center">
                    <img src="{{ url('assets/img/hora-papa.png') }}" alt="">
                </div>
                <div>
                   <a href="{{ url('produto-2') }}"> <button class="btn btn-comprar">COMPRAR</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
