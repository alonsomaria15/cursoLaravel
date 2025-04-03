<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\OperacionesBasicas;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;



//Tarea 2
/*Route::controller(PostController::class)->group(function(){
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts/store', 'store')->name('posts.store');
    Route::get('/posts/{id}', 'show')->name('posts.show');
});*/

//Route::get('/posts/{$id}', 'show')->name('posts.show');

//Route::view('mostrar', 'display',['message' => '<p>Este es un parrafo</p>'])->name('display'); //nombre a la vista
//Route::view('incluir', 'incluir');
//Route::get('/directivas', [UserController::class, 'index'])->name('user.index');
//
/*Route::get('/', function () {
    return view('welcome');
});*/


//forma mas sencilla porque se llama al controlador
//Route::get('/',[CursoController::class,'getName'])->name('home');

//EJERCICIOS DE TAREA
/*Route:: get('/suma/{x}/{y}', [OperacionesBasicas::class,'sumar'])->name('plus');
Route::get('/resta/{x}/{y}', [OperacionesBasicas::class,'restar'])->name('resta');
Route::get('/multipicacion/{x}/{y}', [OperacionesBasicas::class,'multiplicar'])->name('multiplicar');
Route::get('/division/{x}/{y}', [OperacionesBasicas::class,'dividir'])->name('dividir');*/

//NOTAS
/*Route::get('/', function () {
    return view('welcome',['name'=> 'Juan']);
})->name('home'); //nombre a las vistas*/

/*Route:: get('/hola', function () {
    return route('hola');
})->name('hola'); //nombre a la vista
Route:: get('/suma/{x}/{y}', function ($x,$y) {
    $a=[1,2,3,4];
    $aa=['nombre'=>'Juan','apellido'=>'Perez'];
   return 'La suma es:'.$x+$y;
})->where(['x'=>'[0-9]+','y'=>'[0-9]+'])->name('suma');

Route:: get('/nombre/{name?}', function ($name='Juan') {
    return 'Mi nombre es:'.$name;
 })->where('name','[A-Za-z]+');

Route::get('/verificar',function (Request $request){
if($request->route()->named('hola')){
    return "OK";
}else{
    return "NO existe";
}
})->name('verificar');*/



//VISTAS

/*Route::view('ejemplo', 'example', ['name' => 'Juan'])->name('example');


Route::get('curso', [CursoController::class,'index'])->name('curso.index');*/
