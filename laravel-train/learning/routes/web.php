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
 
// Route::get('/', function () {
//     return view('welcome');
// });
 
// Route::post('/enviar', function(Illuminate\Http\Request $request){
//     $contato = new App\Contato();
//     $contato->nome = $request->get('nome');
//     $contato->email = $request->get('email');
//     $contat->mensagem = $request->get('mensagem');

//     $contato->save();

//     echo "Sua mensagem foi armazenada com sucesso! Código: " . $contato->id;
// });

// Route::get('/lista', function () {
//     return view('lista', array('contatos' => App\Contato::all()));
// });

Route::get('/', 'ContatoController@index');
Route::post('/enviar', 'ContatoController@enviar');
// Route::get('/lista', 'ContatoController@lista');
Route::get('/lista', ['middleware' => 'auth', 'uses' => 'ContatoController@lista']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['web']], function() {

    // Login Routes...
        Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
        Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
        Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
    
    // Registration Routes...
        Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
        Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);
    
    // Password Reset Routes...
        Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
        Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
        Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
        Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
    });
