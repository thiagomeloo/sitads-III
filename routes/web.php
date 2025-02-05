<?php

use App\Livewire\Counter;
use App\Livewire\Tarefas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contador', Counter::class);

Route::get('/tarefas', Tarefas::class);
