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

Route::get('/hi', function () {
    return view('welcome1');
});

Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

Route::get('/user/{name?}',function($name = 'Virat'){
   echo "Name: ".$name;
});

Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);

Route::get('terminate',[
   'middleware' => 'Terminate',
   'uses' => 'ABCController@index',
]);

Route::get('profile', [
   'middleware' => 'auth',
   'uses' => 'UserController@showProfile'
]);

Route::get('/usercontroller/path',[
   'middleware' => 'Second',
   'uses' => 'UserController@showPath'
]);

Route::resource('my','MyController');
// Route::controller('test','ImplicitController');

Route::get('/myclass','ImplicitController@index');

Route::get('/foo/bar','UriController@index');

Route::get('/register',function(){
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

// Route::get('/test', function(){
//    return view('test',['name'=>'Virat Gandhi']);
// });

Route::get('blade', function () {
   return view('page',array('name' => 'Virat'));
});
Route::get('/test', ['as'=>'testing',function(){
   return view('test2');
}]);
Route::get('redirect',function(){
   return redirect()->route('testing');
});

Route::get('rr','RedirectController@index');
Route::get('/redirectcontroller',function(){
   return redirect()->action('RedirectController@index');
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');

Route::get('/form',function(){
   return view('form');
});

Route::get('localization/{locale}','LocalizationController@index');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');