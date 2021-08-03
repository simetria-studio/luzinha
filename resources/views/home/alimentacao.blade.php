@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>ALIMENTACÃO</p>
    </div>
    <div class="">
        <img class="img-responsive w-100" src="{{ url('assets/img/foto_lia_2.svg') }}" alt="">
    </div>
    @php
        $texto = '';
    @endphp
    <div class="container">
        <div class="texto text-center px-5">
            <p>Até aos 6 meses, a alimentação do bebé começa por ser feita exclusivamente com leite materno, em livre
                demanda, sempre que o bebé tiver sede ou fome. No entanto, se o bebê for alimentado com leite de fórmula, o
                seu consumo deve ser feito a cada 2 a 4 horas. Porém, volvido esse tempo, o leite materno ou o artificial,
                já não consegue fornecer todos os nutrientes que o bebé necessita para se desenvolver. Surge então a
                recomendação para que sejam introduzidos novos alimentos já que o bebé não faz a digestão da mesma forma.
                Neste momento de vida, o bebé não necessita de beber água, uma vez que o leite tem água e tem todos os
                nutrientes que ele necessita para se desenvolver e crescer de forma adequada.

                Aos 6 meses, a alimentação do bebé deve ser rica em nutrientes, fibras, vitaminas e gorduras boas, presentes
                na fruta, nos cereais, nos legumes e nas proteínas como a carne, o peixe e o ovo, sendo consumidas como:
                Papa de frutas: nesta idade, o bebé pode consumir todas as frutas, que podem ser esmagadas até obter uma
                papa ou cozidas até obter uma consistência macia para que o bebê consiga levar a fruta à boca e mastigá-la
                com as gengivas;
                Sopas: é importante que antes de juntar os alimentos na sopa, o bebé os coma separadamente cozidos e
                esmagados, de forma a que os pais saibam se o alimento é bem tolerado e não provoca alergia ao bebé. As
                sopas devem ser dadas ao bebé preferencialmente ao almoço e devem ser feitas com 2 a 3 alimentos, como
                batata ou arroz, cenoura e abóbora, podendo ser incluído outro legume após 3 a 6 dias. As primeiras sopas
                podem ser dadas sem proteína animal, para que o bebé conheça o sabor dos legumes, no entanto, é importante
                introduzir a proteína como carne branca, peixe magro ou ovo ao preparar a sopa, sendo fundamental que esteja
                bem cozida e bem triturada;
                Leguminosas: a alimentação do bebêétambém pode incluir leguminosas como feijão, ervilhas, lentilhas e grão
                de bico, sendo importante estarem bem triturados.
                Iogurte: o iogurte natural também pode fazer parte da alimentação do bebé aos 6 meses, podendo ser dado nos
                lanches, uma vez que é um alimento fácil de digerir e ajuda na saúde do intestino do bebé.
                Puré de verduras: a alimentação do bebé pode incluir puré de verduras, sendo que os vegetais, como a
                abóbora, a batata, a cenoura, a batata doce, devem estar bem cozidos e triturados. O puré de verduras
                permite que o bebé coma com as mãos ou com uma colher, quando já a conseguir usar, e que sinta a textura dos
                alimentos.
                Papa de cereais: a alimentação do bebé deve ser feita, principalmente, com alimentos naturais como frutas e
                legumes, no entanto, alguns bebés podem necessitar de papa de cereais para ajudar com o seu desenvolvimento,
                podendo ser preparada com leite materno, leite de fórmula, ou com água.
                Em conjunto com os novos alimentos, é importante que o bebé continue sendo amamentado ou tomando leite de
                fórmula nas restantes refeições do dia, ou seja, quando não come papa de cereais ou fruta nem sopa, uma vez
                que o leite tem nutrientes como o cálcio e vitaminas são necessárias para o seu crescimento.

               
            <p class="texto-final"> Mestre em Literatura Portuguesa pela Faculdade de Letras da Universidade do Porto.
                Foi mãe há 2 anos de uma menina chamada Luz. Esta nova fase inspirou-a para escrever uma coleção de 6 livros
                infantis de carácter pedagógico chamada "O Mundo da Luzinha".
            </p>

            {{-- <p class="texto-final">
                    Noa
                </p> --}}
            </p>

        </div>
    </div>
@endsection
