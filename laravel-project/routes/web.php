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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
  return view('index');
});

Route::get('create_account', function () {
  return view('create_account');
});

Route::get('create_account_confirm', function () {
  return view('create_account_confirm');
});

Route::get('create_account_success', function () {
  return view('create_account_success');
});

Route::get('top_page', function () {
  return view('top_page');
});