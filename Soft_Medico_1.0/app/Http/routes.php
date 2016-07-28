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

Route::resource('/', 'loginController');
Route::resource('/inicio', 'inicioController');

Route::resource('/pacientes/registro', 'pacienteController');

Route::get('/pacientes/registro2', function(){
	return view('registro.registro2');
});

Route::get('/pacientes/registrados', 'registradosController@index');

Route::get('/pacientes/historial', function(){
      return view('pacientes.pacienteHistorial');
});

Route::get('/pacientes/captura', function(){
    return view('pacientes.pacienteCaptura'); 
}); 

Route::get('/accesos', function(){
    return view('seguridad.accesos'); 
});

Route::get('/doctores', function(){
	return view('seguridad.doctores'); 
}); 

Route::get('/usuarios', function(){
    return view('seguridad.usuarios');
}); 

Route::get('/lotes', function(){
    return view('lotes.lotes'); 
}); 

Route::get('/informacion', function(){
    return view('lotes.informacionLotes'); 
});

Route::get('/envio', function(){
    return view('registro.envioInformacion'); 
});
