<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('diets','DietController', [
    'except' => [
        'index',
    ]
]);

Route::resource('users','UserController', [
    'except' => [
        'index',
        'create',
        'store',
    ]
]);

Route::resource('measurements','MeasurementController', [
    'except' => [
        'index',
        'create',
    ]
]);

Route::resource('diaries','DiaryController', [
    'except' => [
        'index',
        'create',
    ]
]);

Route::get('/diet/recommended/{user}/', 'DietController@recommended')->name('diets.recommended');

Route::get('/diets/favorities/{user}/', 'DietController@favorities')->name('users.favoritediets');

Route::post('/diets/favorities/{diet}/add', 'DietController@addtofavorities')->name('diets.addtofavorite');

Route::get('/user/measurement/{user}/', 'MeasurementController@activity')->name('users.activity');

Route::get('/user/imc/{user}/', 'MeasurementController@imc')->name('users.imc');

Route::post('/user/measurement/{user}/calculadora', 'MeasurementController@calculadoraMasa')->name('users.calculadora');

Route::get('/user/diary/{user}/', 'DiaryController@mydiary')->name('users.diary');

//Grupo de Alimentos
Route::get('/leche-y-derivados', function () {
    return view('menu/GdA/leche_y_derivados');
});
Route::get('/cereales', function () {
    return view('menu/GdA/cereales');
});
Route::get('/azucar-y-dulces', function () {
    return view('menu/GdA/azucar_y_dulces');
});
Route::get('/legumbres-frutos-secos-y-patatas', function () {
    return view('menu/GdA/legumbres_frutos_secos_y_patatas');
});
Route::get('/verduras-y-hortalizas', function () {
    return view('menu/GdA/verduras_y_hortalizas');
});
Route::get('/frutas', function () {
    return view('menu/GdA/frutas');
});
Route::get('/mantecas-y-aceite-grasas', function () {
    return view('menu/GdA/mantecas_y_aceite_grasas');
});
Route::get('/carnicos-pescado-y-huevo', function () {
    return view('menu/GdA/carnicos_pescado_y_huevo');
});


//Celíacos e intolerancias
Route::get('/celiacos-e-intolerancias', function () {
    return view('menu/celiacos_e_intolerancias');
});


//dietas
Route::get('/dietas/infantil', function () {
    return view('menu/dietas/infantil');
});
Route::get('/dietas/perder-peso', function () {
    return view('menu/dietas/perder_peso');
});
Route::get('/dietas/ganar-peso', function () {
    return view('menu/dietas/ganar_peso');
});
Route::get('/dietas/embarazadas', function () {
    return view('menu/dietas/embarazadas');
});
Route::get('/dietas/mantenimiento', function () {
    return view('menu/dietas/mantenimiento');
});
Route::get('/dietas/deportista', function () {
    return view('menu/dietas/deportista');
});
Route::get('/dietas/menopausia', function () {
    return view('menu/dietas/menopausia');
});
Route::get('/dietas/diabetes', function () {
    return view('menu/dietas/diabetes');
});
Route::get('/dietas/celiacos', function () {
    return view('menu/dietas/celiacos');
});
Route::get('/dietas/veganos-y-vegetarianos', function () {
    return view('menu/dietas/veganos_y_vegetarianos');
});

//Alimentación infantil
Route::get('/alimentacion-infantil', function () {
    return view('menu/alimentacion_infantil');
});

//Embarazo y lactancia
Route::get('/embarazadas', function () {
    return view('menu/embarazadas');
});

//Productos ecológicos
Route::get('/productos-ecologicos', function () {
    return view('menu/productos_ecologicos');
});

//privacidad
Route::get('/privacidad', function () {
    return view('privacidad');
});
