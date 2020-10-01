<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'welcome');
Auth::routes();

Route::prefix('student')->group(function() {
    Route::get('/login', 'Auth\EtudiantLoginController@showLoginForm')->name('etudiant.login');
    Route::post('/login', 'Auth\EtudiantLoginController@login')->name('etudiant.login.submit');
    Route::get('/register', 'Auth\RegisterController@showEtudiantRegisterForm')->name('etudiant.register');
    Route::post('/register', 'Auth\RegisterController@createEtudiant')->name('etudiant.register.submit');
    Route::get('/', 'EtudiantController@index')->name('etudiant.dashboard');
    Route::post('/logout', 'Auth\EtudiantLoginController@logout')->name('etudiant.logout');
});

Route::post('/Inscribe_courses/{id}', 'mainController@store_inscribe_course')->name('store_inscribe_course');
Route::get('/All_Courses', 'mainController@all_course')->name('all-course')->middleware('auth:etudiant');
Route::get('/Inscribe_courses', 'mainController@inscribe_course')->name('inscribe-course')->middleware('auth:etudiant');
Route::get('/courses/{id}', 'mainController@show')->name('cour')->middleware('auth:etudiant');
Route::get('courses/{id}/Lessons', 'mainController@lecon')->name('lecon')->middleware('auth:etudiant');
Route::get('courses/{id}/Tps', 'mainController@tp')->name('tp')->middleware('auth:etudiant');
Route::get('courses/{id}/Examens', 'mainController@examen')->name('examen')->middleware('auth:etudiant');
Route::get('Examens/{id_examen}/Exercices', 'mainController@exercice_examen')->name('exercice_examen')->middleware('auth:etudiant');
Route::get('Tps/{id_examen}/Exercices', 'mainController@exercice_tp')->name('exercice_tp')->middleware('auth:etudiant');
Route::get('Exercices/{id}', 'mainController@exercice')->name('exercice')->middleware('auth:etudiant');
Route::post('/Exercice/{id}', 'mainController@exercice_store')->name('exercice_store');
Route::get('/download/{file}', 'mainController@download');

/*Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\RegisterController@showAdminRegisterForm');
    Route::post('/register', 'Auth\RegisterController@createAdmin')->name('admin.register.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm ')->name('admin.password.reset');
});*/


