<?php

use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Dashboard
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


//front end

Route::get('',[FrontEndController::class, 'index_page'])->name('index.page');
Route::get('/add/header_part',[FrontEndController::class, 'add_header'])->name('add.header');

Route::post('/insert/header_part',[FrontEndController::class, 'insert_header'])->name('header.insert');

Route::get('/add/project',[FrontEndController::class, 'add_project'])->name('add.project');

Route::post('/project/insert',[FrontEndController::class, 'project_insert'])->name('project.insert');

Route::post('/send/message',[FrontEndController::class, 'send_message'])->name('send.message');

Route::get('/view/message',[FrontEndController::class, 'view_message'])->name('view.message');
Route::get('/new/product',[FrontEndController::class, 'new_product'])->name('new.product');

// Rabid

Route::get('/view/Rabid',[FrontEndController::class, 'view_Rabid'])->name('view.Rabid');




