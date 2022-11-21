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
Auth::routes();

Route::get('/', 'CardController@index')
->name('posts.index');
Route::get('/description' , 'CardController@description');
Route::get('/{card}' , 'CardController@show');
Route::group(['middleware' => ['auth']], function(){
    //Route::get('/' , 'CardController@index');
    Route::get('/{card}/create', 'PostController@create');
    Route::post('/{card}/create/posts','PostController@store');
    Route::delete('/{post}/delete', 'PostController@delete');
    Route::get('/{card}/reply/{post}', 'ReplyController@reply');
    Route::post('/{card}/reply/{post}', 'ReplyController@store');
});





