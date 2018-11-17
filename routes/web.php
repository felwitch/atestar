<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('main-content');
});

Route::get('/new-patient', function () {
    return view('new-patient');
});

Route::get('/main-sidebar', function () {
    return view('main-sidebar');
});

Route::get('/graphs', function () {
    return view('graphs');
});

Route::get('/historic', function () {
    return view('historic');
});


$this->get('/test-conn', function () {
    // Insere um novo usuário ao banco de dados:
    $user = \App\User::create([
        'name'         => 'Carlos Ferreira',
        'email'     => 'carlos@especializati.com.br',
        'password'     => bcrypt('SenhaAqui'),
    ]);
    // Se quiser exibir os dados do usuário: dd($user);
 
    // Listando os usuários
    $users = \App\User::get();
 
    echo '<hr>';
    foreach ($users as $user) {
        echo "{$user->name} <br>";
    }
    echo '<hr>';
});