
<?php
// <!-- esta pagina e quem faz as rotas de tudo -->

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventControler;

Route::get('/', [EventControler::class, 'index'] );

Route::get('/event/creat', [EventControler::class, 'creat'] );

Route::get('/produtos', function () {
    return view('produtos');
});

// precisa do id para acessar a pagina
// Route::get('/produtos_solo/{id}', function ($id) {
//     return view('produtoEspecifico', ['id' => $id]);
// });

// o id e opcional, se nao for passado, ele vai ser null, com uma pagina especifica
Route::get('/produtos_solo/{id?}', function ($id = null) {
    return view('produtoEspecifico', ['id' => $id]);
});

Route::get('/produtos', function () {
       
        $busca = request('search');
        
        return view('produtos', ['busca' => $busca]);
    });