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
Route::pattern('id','([0-9]*)');
Route::pattern('cid','([0-9]*)');
Route::pattern('slug','(.*)');


Route::namespace('Travel')->group(function(){
	Route::get('', [
		'uses' => 'IndexController@index',
		'as' => 'travel.index.index'
	]);
	Route::get('lien-he', [
		'uses' => 'IndexController@contact',
		'as' => 'travel.index.contact'
	]);
	Route::post('lien-he', [
		'uses' => 'IndexController@postContact',
		'as' => 'travel.index.contact'
	]);
	Route::get('gioi-thieu', [
		'uses' => 'IndexController@about',
		'as' => 'travel.index.about'
	]);
	Route::get('tour-du-lich', [
		'uses' => 'TourController@index',
		'as' => 'travel.tour.index'
	]);
	Route::get('stick/{slug}', [
		'uses' => 'TourController@stick',
		'as' => 'travel.tour.stick'
	]);
	Route::get('tour/{slug}', [
		'uses' => 'TourController@detail',
		'as' => 'travel.tour.detail'
	]);
	Route::post('tour/{slug}', [
		'uses' => 'TourController@rating',
		'as' => 'travel.tour.rating'
	]);
	Route::get('tim-kiem-tour', [
		'uses' => 'TourController@search',
		'as' => 'travel.tour.search'
	]);
	Route::get('blog', [
		'uses' => 'PostController@index',
		'as' => 'travel.post.index'
	]);
	Route::get('thue-xe', [
		'uses' => 'TravelController@index',
		'as' => 'travel.travel.index'
	]);
	Route::get('thue-xe/{slug}', [
		'uses' => 'TravelController@detail',
		'as' => 'travel.travel.detail'
	]);
	Route::get('tag/{slug}', [
		'uses' => 'PostController@tag',
		'as' => 'travel.post.tag'
	]);
	Route::get('{slug}-{id}.html', [
		'uses' => 'PostController@detail',
		'as' => 'travel.post.detail'
	]);
	Route::post('comment-{id}', [
		'uses' => 'PostController@comment',
		'as' => 'travel.post.comment'
	]);
	Route::get('sitemap.xml', [
		'uses' => 'IndexController@sitemap',
		'as' => 'travel.index.sitemap'
	]);
});

Route::namespace('Auth')->group(function(){
	Route::get('login', [
		'uses' => 'AuthController@getLogin',
		'as' => 'auth.auth.login'
	]);
	Route::post('login', [
		'uses' => 'AuthController@postLogin',
		'as' => 'auth.auth.login'
	]);
	Route::get('logout', [
		'uses' => 'AuthController@logout',
		'as' => 'auth.auth.logout'
	]);
});

Route::namespace('Ajax')->group(function(){

	Route::prefix('admin')->group(function(){
		Route::get('pictures', [
			'uses' => 'AdminController@picture',
			'as' => 'ajax.admin.picture'
		]);
		Route::get('posts', [
			'uses' => 'AdminController@post',
			'as' => 'ajax.admin.post'
		]);
		Route::get('tours', [
			'uses' => 'AdminController@tour',
			'as' => 'ajax.admin.tour'
		]);
		Route::get('travels', [
			'uses' => 'AdminController@travel',
			'as' => 'ajax.admin.travel'
		]);
	});

	Route::prefix('travel')->group(function(){
		Route::get('travels', [
			'uses' => 'TravelController@travel',
			'as' => 'ajax.travel.travel'
		]);
		Route::get('tours', [
			'uses' => 'TravelController@tour',
			'as' => 'ajax.travel.tour'
		]);
		Route::post('checktravel/{id}', [
			'uses' => 'TravelController@checktravel',
			'as' => 'ajax.travel.checktravel'
		]);
		Route::post('checktour/{id}', [
			'uses' => 'TravelController@checktour',
			'as' => 'ajax.travel.checktour'
		]);
	});
});


Route::namespace('Admin')->middleware('auth')->group(function(){
// Index ADMIN	
	Route::prefix('admin')->group(function(){
		Route::get('', [
			'uses' => 'IndexController@index',
			'as' => 'admin.index.index'
		]);
	//tag
		Route::prefix('tag')->group(function(){
			Route::get('', [
				'uses' => 'TagController@index',
				'as' => 'admin.tag.index'
			]);
			Route::get('add', [
				'uses' => 'TagController@getAdd',
				'as' => 'admin.tag.add'
			]);
			Route::post('add', [
				'uses' => 'TagController@postAdd',
				'as' => 'admin.tag.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'TagController@getEdit',
				'as' => 'admin.tag.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'TagController@postEdit',
				'as' => 'admin.tag.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'TagController@delete',
				'as' => 'admin.tag.delete'
			]);
		});
	//stick
		Route::prefix('stick')->group(function(){
			Route::get('', [
				'uses' => 'StickController@index',
				'as' => 'admin.stick.index'
			]);
			Route::get('add', [
				'uses' => 'StickController@getAdd',
				'as' => 'admin.stick.add'
			]);
			Route::post('add', [
				'uses' => 'StickController@postAdd',
				'as' => 'admin.stick.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'StickController@getEdit',
				'as' => 'admin.stick.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'StickController@postEdit',
				'as' => 'admin.stick.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'StickController@delete',
				'as' => 'admin.stick.delete'
			]);
		});
		Route::prefix('news')->group(function(){
			Route::get('', [
				'uses' => 'NewsController@index',
				'as' => 'admin.news.index'
			]);
			Route::get('add', [
				'uses' => 'NewsController@getAdd',
				'as' => 'admin.news.add'
			]);
			Route::post('add', [
				'uses' => 'NewsController@postAdd',
				'as' => 'admin.news.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'NewsController@getEdit',
				'as' => 'admin.news.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'NewsController@postEdit',
				'as' => 'admin.news.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'NewsController@delete',
				'as' => 'admin.news.delete'
			]);
		});
		Route::prefix('tour')->group(function(){
			Route::get('', [
				'uses' => 'TourController@index',
				'as' => 'admin.tour.index'
			]);
			Route::get('add', [
				'uses' => 'TourController@getAdd',
				'as' => 'admin.tour.add'
			]);
			Route::post('add', [
				'uses' => 'TourController@postAdd',
				'as' => 'admin.tour.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'TourController@getEdit',
				'as' => 'admin.tour.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'TourController@postEdit',
				'as' => 'admin.tour.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'TourController@delete',
				'as' => 'admin.tour.delete'
			]);
		});
		Route::prefix('travel')->group(function(){
			Route::get('', [
				'uses' => 'TravelController@index',
				'as' => 'admin.travel.index'
			]);
			Route::get('add', [
				'uses' => 'TravelController@getAdd',
				'as' => 'admin.travel.add'
			]);
			Route::post('add', [
				'uses' => 'TravelController@postAdd',
				'as' => 'admin.travel.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'TravelController@getEdit',
				'as' => 'admin.travel.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'TravelController@postEdit',
				'as' => 'admin.travel.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'TravelController@delete',
				'as' => 'admin.travel.delete'
			]);
		});
		Route::prefix('users')->group(function(){
			Route::get('', [
				'uses' => 'UsersController@index',
				'as' => 'admin.users.index'
			]);
			Route::get('add', [
				'uses' => 'UsersController@getAdd',
				'as' => 'admin.users.add'
			]);
			Route::post('add', [
				'uses' => 'UsersController@postAdd',
				'as' => 'admin.users.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'UsersController@getEdit',
				'as' => 'admin.users.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'UsersController@postEdit',
				'as' => 'admin.users.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'UsersController@delete',
				'as' => 'admin.users.delete'
			]);
		});
		Route::prefix('car')->group(function(){
			Route::get('edit/{id}', [
				'uses' => 'CarController@getEdit',
				'as' => 'admin.car.edit'
			]);
			Route::post('edit/{id}', [
				'uses' => 'CarController@postEdit',
				'as' => 'admin.car.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'CarController@delete',
				'as' => 'admin.car.delete'
			]);
		});
		Route::prefix('contact')->group(function(){
			Route::get('', [
				'uses' => 'ContactController@index',
				'as' => 'admin.contact.index'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'ContactController@delete',
				'as' => 'admin.contact.delete'
			]);
		});
		Route::prefix('advise')->group(function(){
			Route::get('', [
				'uses' => 'AdviseController@index',
				'as' => 'admin.advise.index'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'AdviseController@delete',
				'as' => 'admin.advise.delete'
			]);
		});
		Route::prefix('location')->group(function(){
			Route::get('', [
				'uses' => 'IpController@index',
				'as' => 'admin.location.index'
			]);
			Route::get('delete/{id}', [
				'uses' => 'IpController@delete',
				'as' => 'admin.location.delete'
			]);
		});
	});
});