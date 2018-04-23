<?php
 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::post('/enviar', function(Illuminate\Http\Request $request){
    $contato = new App\Contato();
    $contato->nome = $request->get('nome');
    $contato->email = $request->get('email');
    $contat->mensagem = $request->get('mensagem');

    $contato->save();

    echo "Sua mensagem foi armazenada com sucesso! Código: " . $contato->id;
});
