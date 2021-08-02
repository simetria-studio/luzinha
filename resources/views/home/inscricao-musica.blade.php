@extends('layouts.main')

@section('content')
    <div class="voltar">
      <a href="{{ url('bebes') }}"> <button class="btn btn-voltar">VOLTAR</button></a>
    </div>
    <div class="titulo">
        <P>AULAS DE MÚSICA</P>
    </div>
    <div class="container">
        <div class="text-center texto-2">
            <p>Inscreva o seu bebé na próxima <br> AULA DE MÚSICA PARA BEBÉS. <br> Confira o  calendário para as <br> próximas aulas e
                inscreva-se. <br> Sujeito a lotação disponível.</p>
        </div>

        <form action="">
            <div class="formulario">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Encarregado da Educação</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome da Criança </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telefone para contato</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">E-mail para contato</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observações</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="enviar">
                    <button class="btn btn-enviar">ENVIAR</button>
                </div>
            </div>
        </form>
    </div>
@endsection
