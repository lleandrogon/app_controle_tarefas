<?php

use App\Http\Controllers\TarefaController;
use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('bem-vindo');
});

Auth::routes(['verify' => true]);

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('verified');
*/

Route::resource('tarefa', TarefaController::class)
    ->middleware('verified');;


Route::get('/mensagem-teste', function() {
    return new MensagemTesteMail();
    //Mail::to('lleandrogon2004@gmail.com')->send(new MensagemTesteMail());
    //return 'E-mail enviado com sucesso!';
});