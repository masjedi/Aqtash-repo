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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ]
],
function() {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/' , 'PagesController@index');
    //Route::get('/teacher', 'PagesController@teacher');
    Route::get('/about','PagesController@about');
    Route::get('/courses','PagesController@course');
    Route::get('/blog','PagesController@blog');
    Route::get('/contact','PagesController@contact');
    Route::get('/teacher','PagesController@teacher');
    Route::get('/course_detail/{id}', 'PagesController@courseDetail');
    Route::get('/alsa/home', 'HomeController@index')->name('home');
    
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::resource('/art','ArticleController');
    Route::resource('/char','CharacterController');
    Route::resource('/event','EventController');
    Route::resource('/meet','MeetingController');
    Route::resource('/category','CategoryController');
    Route::resource('/member','MemberController');
    Route::resource('/newthought','NewthoughtController');

   });
});
Auth::routes();
Route::get('/dashboard', 'AdminController@index');
Route::get('/alsa/home', 'HomeController@index')->name('home');
Route::resource('/alsa/course','CourseController');
Route::resource('/alsa/category','CategoryController');
Route::resource('/alsa/teacher','TeacherController');
Route::resource('/alsa/video','VideoController');
Route::get('/alsa/course-video/{id}','CourseController@video');


