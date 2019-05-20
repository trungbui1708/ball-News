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
// Route::get('test',function(){
// 	return view('admin.Category.List');
// });
Route::get('dangnhap','loginController@getLogin');
Route::post('dangnhap','loginController@postLogin');

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::group(['prefix'=>'user'],function(){
		Route::get('list','UserController@getList');
		Route::get('add','UserController@getAdd');
		Route::post('add','UserController@postAdd');
		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');
		Route::get('delete/{id}','UserController@getDelete');

	});
});


Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'category'],function(){
		Route::get('list','CategoryController@getList');
		Route::get('add','CategoryController@getAdd');
		Route::post('add','CategoryController@postAdd');
		Route::get('edit/{id}','CategoryController@getEdit');
		Route::post('edit/{id}','CategoryController@postEdit');
		Route::get('delete/{id}','CategoryController@getDelete');

	});
});

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'news'],function(){
		Route::get('list','NewsController@getList');
		Route::get('add','NewsController@getAdd');
		Route::post('add','NewsController@postAdd');
		Route::get('edit/{id}','NewsController@getEdit');
		Route::post('edit/{id}','NewsController@postEdit');
		Route::get('delete/{id}','NewsController@getDelete');

	});
});

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'image'],function(){
		Route::get('list','ImageController@getList');
		Route::get('add','ImageController@getAdd');
		Route::post('add','ImageController@postAdd');
		Route::get('delete/{id}','ImageController@getDelete');
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'tournament'],function(){
		Route::get('list','TournamentController@getList');
		Route::get('edit/{id}','TournamentController@getEdit');
		Route::post('edit/{id}','TournamentController@postEdit');
		Route::get('add','TournamentController@getAdd');
		Route::post('add','TournamentController@postAdd');
		Route::get('delete/{id}','TournamentController@getDelete');
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'round'],function(){
		Route::get('list','RoundController@getList');
		Route::get('add','RoundController@getAdd');
		Route::post('add','RoundController@postAdd');
		Route::get('edit/{id}','RoundController@getEdit');
		Route::post('edit/{id}','RoundController@postEdit');
		Route::get('delete/{id}','RoundController@getDelete');
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'rank'],function(){
		Route::get('list','RankController@getList');
		Route::get('edit/{id}','RankController@getEdit');
		Route::post('edit/{id}','RankController@postEdit');
		Route::get('add','RankController@getAdd');
		Route::post('add','RankController@postAdd');
		Route::get('delete/{id}','RankController@getDelete');
	});
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'club'],function(){
		Route::get('list','ClubController@getList');
		Route::get('edit/{id}','ClubController@getEdit');
		Route::post('edit/{id}','ClubController@postEdit');
		Route::get('add','ClubController@getAdd');
		Route::post('add','ClubController@postAdd');
		Route::get('delete/{id}','ClubController@getDelete');
	});
	Route::get('index','ClubController@getIndex');
});
Route::get('ranking','PagesController@ranking');
 Route::get('home', 'PagesController@index');
Route::get('news/{id}', 'PagesController@news');
Route::get('tin-tuc/{id}', 'PagesController@list_news');
Route::post('comment/{id}', 'PageController@postComment');


