@extends('layouts.main')

@section('content')
    <div class="voltar">
        <button class="btn btn-voltar">VOLTAR</button>
    </div>
    <div class="titulo">
        <p>AULAS DE BALLET</p>
    </div>
    <div class="container">
        <div class="text-center texto-2">
            <p>
            Inscreva o seu bebé na próxima <br> AULA DE MÚSICA PARA BEBÉS. Confira <br> o calendário para as próximas aulas <br> e
            inscreva-se. Sujeito a lotação <br> disponível. <br></p>

            <p>-Próximas aulas (a partir dos 3 anos)</p>
            <p>-Início a 6 de Setembro</p>
            <p>-Estúdio de Dança Margarida Valle</p>
            <p>Rua Estrela e Vigorosa Sport, 604, 4200-286 Porto</p>
            <p>-Contato 934916294</p>
            <p>-Inscreva-se já!</p>
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
