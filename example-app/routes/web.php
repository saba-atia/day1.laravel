<?php

use Illuminate\Support\Facades\Route;
use resources\views\task1;
use resources\views\task2;
use resources\views\age;
use App\Http\Controllers\task4;
use resources\views\user;
use resources\views\category;
use resources\views\task11;
use resources\views\task13;
use resources\views\test;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//day1
//task1

Route::get('/task1', function (){
return "Hello,World";

});


//task2

Route::get('task2/{name}', function($name){
    return "Hello, $name";
});

//task3 
Route::get ('/age/{age?}', function($age = null){
    return $age ? "you are $age years old." : "Age isn't provided.";
});


//task4 
Route::get('/task4', [task4::class, 'index']);

//task5



//task6

//task7
Route::get('/user/{id}', function($id){

    return "user id: $id";

} ) ->where('id', '[0-9]+');


//task8
Route::fallback(function(){
    return response()->view('errors.erormessage',[] ,404 ) ;
});

//task9



//task10
Route::get('/category/{category}/{id}', function ($category, $id) {
    return "category: $category, id: $id";
});

//task11
Route::get('/task11/{page?}',function($page = 1){
    return "you are in page {$page}";
});

//task12
Route::redirect('/test', '/task13');

//task13
Route::get('/task13', function(){
    return view ('task13');
});




/////////////////////////

//day1 -2 

Route::get('/dashboard', function(){
    return view('dashboard');
});