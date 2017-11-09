<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('menuinicio');
})->middleware('auth');

Route::get('/vista', array('as' => 'vista', function () {
    return view('vista');
}));

Route::get('/edicion', array('as' => 'edicion', function () {
    return view('edicion');
}));

Route::get('/qles', array('as' => 'qles', function () {
    return view('qles');
}));

Route::get('/logreg', array('as' => 'logreg', function () {
    return view('logreg');
}));

Route::get('/ypassecond', array('as' => 'ypassecond', function () {
    return view('ypassecond');
}));

Route::get('/ypas', array('as' => 'ypas', function () {
    return view('ypas');
}));

Route::get('/amai', array('as' => 'amai', function () {
    return view('amai');
}));

Route::get('/testfager', array('as' => 'testfager', function () {
    return view('testfager');
}));

Route::get('/audit', array('as' => 'audit', function () {
    return view('audit');
}));

Route::get('/start', array('as' => 'start', function () {
    return view('start');
}));

Route::get('/menuinicio', array('as' => 'menuinicio', function () {
    return view('menuinicio');
}))->middleware('auth');


Route::get('/welcome', array('as' => 'welcome', function () {
    return view('welcome');
}));

Route::get('/examenvoluntario', array('as' => 'examenvoluntario', function () {
    return view('examenvoluntario');
}));

Route::get('/evaluacionneuropsicologicabreve1', array('as' => 'evaluacionneuropsicologicabreve1', function () {
    return view('evaluacionneuropsicologicabreve1');
}));

Route::get('/evaluacionneuropsicologicabreve2', array('as' => 'evaluacionneuropsicologicabreve2', function () {
    return view('evaluacionneuropsicologicabreve2');
}));

Route::get('/evaluacionneuropsicologicabreve', array('as' => 'evaluacionneuropsicologicabreve', function () {
    return view('evaluacionneuropsicologicabreve');
}));

Route::get('/entrevistaprevia', array('as' => 'entrevistaprevia', function () {
    return view('entrevistaprevia');
}));

Route::get('/MostrarPacientes', array('as' => 'MostrarPacientes', function () {
    return view('MostrarPacientes')->middleware('auth');
}));

Route::get('/prueba', array('as' => 'prueba', function () {
    return view('prueba');
}));

Route::get('/pdf', function(){
    //$prueba= 'Hola como estas?';
    $pdf = PDF::loadView('testfager'/*,compact('prueba')*/);
    return $pdf->download('prueba.pdf');
}
);

Route::post('datos', 'DatosController@cargardatos')->middleware('auth');

Route::get('mostrar', 'SelectDatosController@mostrardatos')->middleware('auth');

Route::get('select', 'Select@seleccion');

Route::resource('mstr', 'UserController');



Auth::routes();

Route::get('/home', 'HomeController@index');
