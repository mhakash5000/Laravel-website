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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//all header(frontend page)routes start from here
Route::get('/','Frontend\FrontendController@index');
Route::get('aboutUs','Frontend\FrontendController@AboutUs')->name('aboutUs');
Route::get('contactUs','Frontend\FrontendController@ContactUs')->name('contactUs');
Route::get('mission','Frontend\FrontendController@MiSsion')->name('mission');;
Route::get('vision','Frontend\FrontendController@ViSion')->name('vision');
Route::get('newsevent.details{id}','Frontend\FrontendController@NewsEventDetails')->name('newsevent.details');
Route::post('Contact.Store','Frontend\FrontendController@Store')->name('Contact.Store');
// group middleware start from here
Route::group(['middleware' => ['test']], function () {
//all header(backend page)routes start from here
Route::prefix('users')->group(function () {
Route::get('/all','Backend\UserController@index')->name('users.all');
Route::get('/create','Backend\UserController@create')->name('users.create');
Route::post('/store','Backend\UserController@store')->name('users.store');
Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
Route::get('/destroy/{id}','Backend\UserController@destroy')->name('users.destroy');
});

// Profile Routes start from here
Route::prefix('profile')->group(function () {
Route::get('/user','Backend\ProfileController@index')->name('profile.user');
Route::post('/store','Backend\ProfileController@store')->name('profile.store');
Route::get('/edit','Backend\ProfileController@edit')->name('profile.edit');
Route::post('/update','Backend\ProfileController@update')->name('profile.update');
Route::get('/change-password','Backend\ProfileController@ChangePassword')->name('change.password');
Route::post('/update-password','Backend\ProfileController@UpdatePassword')->name('update.password');

});



//Logo routes start from here
Route::prefix('logos')->group(function () {
Route::get('/view','Backend\LogoController@index')->name('logos.view');
Route::get('/create','Backend\LogoController@create')->name('logos.create');
Route::post('/store','Backend\LogoController@store')->name('logos.store');
Route::get('/edit/{id}','Backend\LogoController@edit')->name('logos.edit');
Route::post('/update/{id}','Backend\LogoController@update')->name('logos.update');
Route::get('/destroy/{id}','Backend\LogoController@destroy')->name('logos.destroy');
});

//Sliders routes start from here
Route::prefix('sliders')->group(function () {
Route::get('/view','Backend\SliderController@index')->name('sliders.view');
Route::get('/create','Backend\SliderController@create')->name('sliders.create');
Route::post('/store','Backend\SliderController@store')->name('sliders.store');
Route::get('/edit/{id}','Backend\SliderController@edit')->name('sliders.edit');
Route::post('/update/{id}','Backend\SliderController@update')->name('sliders.update');
Route::get('/destroy/{id}','Backend\SliderController@destroy')->name('sliders.destroy');
});


//missions routes start from here
Route::prefix('missions')->group(function () {
Route::get('/view','Backend\MissionController@index')->name('missions.view');
Route::get('/create','Backend\MissionController@create')->name('missions.create');
Route::post('/store','Backend\MissionController@store')->name('missions.store');
Route::get('/edit/{id}','Backend\MissionController@edit')->name('missions.edit');
Route::post('/update/{id}','Backend\MissionController@update')->name('missions.update');
Route::get('/destroy/{id}','Backend\MissionController@destroy')->name('missions.destroy');
});

//Vision routes start from here
Route::prefix('visions')->group(function () {
Route::get('/view','Backend\VisionController@index')->name('visions.view');
Route::get('/create','Backend\VisionController@create')->name('visions.create');
Route::post('/store','Backend\VisionController@store')->name('visions.store');
Route::get('/edit/{id}','Backend\VisionController@edit')->name('visions.edit');
Route::post('/update/{id}','Backend\VisionController@update')->name('visions.update');
Route::get('/destroy/{id}','Backend\VisionController@destroy')->name('visions.destroy');
});

//Newsevent routes start from here
Route::prefix('newsevents')->group(function () {
Route::get('/view','Backend\NewseventController@index')->name('newsevents.view');
Route::get('/create','Backend\NewseventController@create')->name('newsevents.create');
Route::post('/store','Backend\NewseventController@store')->name('newsevents.store');
Route::get('/edit/{id}','Backend\NewseventController@edit')->name('newsevents.edit');
Route::post('/update/{id}','Backend\NewseventController@update')->name('newsevents.update');
Route::get('/destroy/{id}','Backend\NewseventController@destroy')->name('newsevents.destroy');
});

//services routes start from here
Route::prefix('services')->group(function () {
Route::get('/view','Backend\ServiceController@index')->name('services.view');
Route::get('/create','Backend\ServiceController@create')->name('services.create');
Route::post('/store','Backend\ServiceController@store')->name('services.store');
Route::get('/edit/{id}','Backend\ServiceController@edit')->name('services.edit');
Route::post('/update/{id}','Backend\ServiceController@update')->name('services.update');
Route::get('/destroy/{id}','Backend\ServiceController@destroy')->name('services.destroy');
});

//services routes start from here
Route::prefix('contacts')->group(function () {
Route::get('/view','Backend\ContactController@index')->name('contacts.view');
Route::get('/create','Backend\ContactController@create')->name('contacts.create');
Route::post('/store','Backend\ContactController@store')->name('contacts.store');
Route::get('/edit/{id}','Backend\ContactController@edit')->name('contacts.edit');
Route::post('/update/{id}','Backend\ContactController@update')->name('contacts.update');
Route::get('/destroy/{id}','Backend\ContactController@destroy')->name('contacts.destroy');
});

//services routes start from here
Route::prefix('about')->group(function () {
Route::get('/view','Backend\AboutController@index')->name('about.view');
Route::get('/create','Backend\AboutController@create')->name('about.create');
Route::post('/store','Backend\AboutController@store')->name('about.store');
Route::get('/edit/{id}','Backend\AboutController@edit')->name('about.edit');
Route::post('/update/{id}','Backend\AboutController@update')->name('about.update');
Route::get('/destroy/{id}','Backend\AboutController@destroy')->name('about.destroy');
});

//User Email route
Route::get('user-email.view','Frontend\FrontendController@UserEmailView')->name('user-email.view');
Route::get('/user-email.destroy/{id}','Frontend\FrontendController@destroy')->name('user-email.destroy');
});
// group middleware End here
