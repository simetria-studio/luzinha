@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="bom-dia">
            <img src="{{ url('assets/img/bom-dia.png') }}" alt="">
        </div>
        <div class="hora-da-papa">
           <a href="{{ url('livro-1') }}"> <img src="{{ url('assets/img/hora-papa.png') }}" alt=""></a>
        </div>
    </div>
@endsection
