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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home','HomeController@index')->name('home') ->middleware('verified');

Route::get('/dashboard',function(){

return 'dashboard';
});

//route parameters

Route::get('/shownum/{id}',function($id){
 return 'welcome' . $id;
});


//route name

Route::get('/showname/{id}',function($id){
 return 'welcome ' . $id;
})->name('b');  //------- minimize the name of route
/// <a href="{{route('b',ziad)}}">shoname</a>    


Route::namespace('Front')->group(function(){
    //means all routes acces controller or methods in folder named Front  
    //Route::get('users','UserController@showusername');
    Route::get('showme','FirstController@index');
     Route::get('create','FirstController@create');
      Route::get('store','FirstController@store');

});

///method 1 for route group 
// Route::prefix('users')->group(function(){ 
//  // here we are using prefix to do not repeat the comman path like users\show or users/edit ........
//       Route::get('show','UserController@showusername');
//       Route::get('edit','UserController@showusername');
//       Route::put('update','UserController@showusername');
//       Route::put('delete','UserController@showusername');
// });


///method 2 for route group with middleware 
// Route::group(['prefix'=>'users','middleware'=>'auth'],function(){ 
//     /// here we are using prefix to do not repeat the comman path like users\show or users/edit ........
//     Route::get('/',function(){
// return 'My Work ziad';
//     });
//       Route::get('show','UserController@showusername');
//       Route::get('edit','UserController@showusername');
//       Route::put('update','UserController@showusername');
//       Route::put('delete','UserController@showusername');
// });

//method to put a middleware for each route 
Route::get('check',function(){

return 'middleware';
})->middleware('auth');


// Route::get('showme','Front/FirstController@index')->middleware('auth'); // here the middelware work only for this function
//  // not for all functions in this Contrller
Route::resource('news','NewsController');//here we can use the all method on this controller 
// without any write the name of this method here


Route::get('index','NewsController@getindex');

Route::get('landing',function(){
return view ('landing');
    
});

Route::get('aboutus',function(){

return view('aboutus');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
