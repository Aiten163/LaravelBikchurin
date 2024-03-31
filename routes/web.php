<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/all/{order?}/{dir?}',[PostController::class, 'getAll'])
->where('order','^(id|title|date)$')->where('dir','^(desc|asc)$');
Route::get('/post/{id}',[PostController::class, 'getOne'])
    ->where(['id' => '[+]?\d+']);

Route::get('/post/new',function (){
    return view('/post/new');
});
Route::post('/post/new',[PostController::class, 'newPost']);
Route::get('/404',function () {
    return view('/404');
});
Route::match(['get', 'post'], '/post/edit/{id}', [PostController::class, 'editPost'])->name('edit');
Route::get('/post/del/{id}',[PostController::class, 'delPost']);
