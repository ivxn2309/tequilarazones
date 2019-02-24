<?php

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

Route::get('/', 'SiteController@home')->name('home');
Route::get('/home', 'SiteController@home')->name('home');
Route::post('/home', 'SiteController@home')->name('home');

Route::post('/contact', 'MailController@sendContactForm')->name('contact_form_sender');
Route::get('/thanks', 'SiteController@saveContact')->name('save_contact');
