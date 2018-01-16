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


Route::resource('/admin/teacher','admin\TeacherController');
Route::resource('/admin/student','admin\StudentController');
Route::resource('/admin/gallery','admin\GalleryController');
Route::resource('/admin/slider','admin\SliderController');
Route::resource('/admin/event','admin\EventController');
Route::resource('/admin/article','admin\ArticleController');
Route::resource('/admin/parent','admin\ParenController');
Route::resource('/admin/result','admin\ResultController');
Route::resource('/admin/attendance','admin\AttendanceController');
Route::resource('/admin/notice','admin\NoticeController');
Route::resource('/admin/about','admin\AboutController');
Route::resource('/sports','admin\SportController@home');
Route::get('ajax','AjaxController@index');
Route::get('/ajax/read-data','AjaxController@readdata');
Route::get('/ajax/read-data2','AjaxController@readdata2');
////////
////////Route for student info
////////
Route::get('info-class','admin\InfoController@infoclass1');

///////
///////Route for webpage
/////
Route::get('/','web\HomepageController@index');
Route::get('/abouts','web\HomepageController@about');
Route::resource('/contacts','web\ContactController');
Route::get('/galleries','web\HomepageController@gallery');
Route::get('/events','web\HomepageController@web');
Route::get('/event-detail/{id}','web\HomepageController@display');
Route::get('/notices','web\HomepageController@notice');


////
////This is for Auth login
////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', 'AdminController@index');
