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
    return view('welcome');
});

Route::get('/add-form-template', function () {
    return view('add-form-template');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::post('/add-template', 'FormTemplateController@store')->name('add-template.store');

Route::get('/form-templates', 'FormTemplateController@get_form_templates');

Route::get('/form-template/{value}', 'FormTemplateController@get_form_template');

Route::post('/add-form', 'FormsController@store')->name('add-form.store');

Route::get('/forms', 'FormsController@get_forms');

Route::get('/form/{value}', 'FormsController@get_form');



