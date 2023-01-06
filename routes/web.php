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

Route::get('/', 'App\Http\Controllers\HeadController@index')->name('index');
Route::get('/team', 'App\Http\Controllers\HeadController@team')->name('team');
Route::get('/schedule', 'App\Http\Controllers\HeadController@schedule')->name('schedule');
Route::get('/price', 'App\Http\Controllers\HeadController@price')->name('price');
Route::get('/comments', 'App\Http\Controllers\HeadController@comments')->name('comments');
Route::post('/comments', 'App\Http\Controllers\HeadController@comments_post')->name('commentsPOST')->middleware('auth');
Route::get('/auth', 'App\Http\Controllers\HeadController@auth')->name('auth')->middleware('guest');
Route::get('/cabinet', 'App\Http\Controllers\HeadController@cabinet')->name('cabinet')->middleware('auth');
Route::get('/cabinet/logout', 'App\Http\Controllers\HeadController@logout')->name('logout')->middleware('auth');
Route::post('/cabinet/save', 'App\Http\Controllers\HeadController@cabinet_save')->middleware('auth')->name('cabinet_save');
Route::post('/auth/register/', 'App\Http\Controllers\AuthController@register')->name('registerPOST')->middleware('guest');
Route::post('/auth/login/', 'App\Http\Controllers\AuthController@login')->name('loginPOST')->middleware('guest');

Route::get('/email', 'App\Http\Controllers\HeadController@email_verify')->name('emailVerify')->middleware('auth');
Route::get('/email/verify/{token}', 'App\Http\Controllers\HeadController@email_verify_post')->name('emailVerifyPost')->middleware('auth');

Route::get('/sauth/{provider}/', 'App\Http\Controllers\SocialController@redirectToProvider')->name('socialAccount')->middleware('guest');
Route::get('/sauth/{provider}/callback', 'App\Http\Controllers\SocialController@handleProviderCallback')->name('authcallback')->middleware('guest');

// admin panel

Route::get('/admin', 'App\Http\Controllers\AdminController@admin')->name('admin')->middleware('role:admin,editor');
Route::get('/admin/pages', 'App\Http\Controllers\AdminController@pages')->name('adminPages')->middleware('role:admin,editor');
Route::get('/admin/pages/team', 'App\Http\Controllers\AdminController@pages_team')->name('TeamPage')->middleware('role:admin,editor');
Route::get('/admin/users', 'App\Http\Controllers\AdminController@users')->name('adminUsers')->middleware('role:admin');
Route::get('/admin/workers', 'App\Http\Controllers\AdminController@workers')->name('workers')->middleware('role:admin');
Route::get('/admin/users/{id}', 'App\Http\Controllers\AdminController@user_profile')->name('adminUserId')->middleware('role:admin');
Route::post('/admin/users/{id}', 'App\Http\Controllers\AdminController@user_profile_save')->name('adminUserSave')->middleware('role:admin');
Route::get('/admin/comments', 'App\Http\Controllers\AdminController@comments')->name('adminComments')->middleware('role:admin,editor');
Route::get('/admin/comments/approved', 'App\Http\Controllers\AdminController@comments_approved')->name('adminCommentsApproved')->middleware('role:admin,editor');
Route::post('/admin/comments/{id}', 'App\Http\Controllers\AdminController@comments_edit')->name('adminCommentsPost')->middleware('role:admin,editor');
Route::get('/admin/comments/{id}', 'App\Http\Controllers\AdminController@comments_get')->name('adminCommentsGet')->middleware('role:admin,editor');
Route::get('/admin/comments/delete/{id}', 'App\Http\Controllers\AdminController@comments_delete')->name('adminCommentsDelete')->middleware('role:admin,editor');