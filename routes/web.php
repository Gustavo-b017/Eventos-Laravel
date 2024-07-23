<!-- esta pagina e quem faz as rotas de tudo -->

<?php

use Illuminate\Support\Facades\Route;

// estrutura padrao de criacao de rotas, que comeca e termina

Route::get('/', function () {
    
    $nome = 'Gustavo';
    $idade = 18;
    $arr = [13,28,23,44,545,653, 74];
    $nomes = ['hislton', 'gustavo', 'joao', 'maria', 'jose', 'pedro', 'michel', 'gilmar'];



    // o nome passado nas strings sao os que serao usados no view
    // eles sao passados como array, e ligados com as respectivas variaveis
    return view('welcome', 
        [   'nome' => $nome,  
            'idade' => $idade, 
            'estudo' => 'programacao',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});
