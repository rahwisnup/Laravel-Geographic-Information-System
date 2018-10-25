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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::resource('admin','AdminController');
Route::resource('member','MemberController');
Route::get('/member','MemberController@index');

Route::middleware('auth','role')->group(function(){
	Route::get('/admin', 'AdminController@index')->name('admin.index');


	Route::resource('tree-categories','TreeCategoriesController');
	Route::get('/admin/tree-categories/create','TreeCategoriesController@createTreeCategories')->name('treeCategories.create');
	Route::post('/admin/tree-categories/create','TreeCategoriesController@storeTreeCategories')->name('treeCategories.store');
	Route::get('admin/tree-categories/list','TreeCategoriesController@index')->name('treeCategories.list');
	//edit
	Route::get('admin/tree-categories/{id}/edit','TreeCategoriesController@editTreeCategories')->name('treeCategories.edit');
	Route::patch('admin/tree-categories/{id}/edit','TreeCategoriesController@updateTreeCategories')->name('treeCategories.update');
	//hapus
	Route::delete('admin/tree-categories/{id}/delete','TreeCategoriesController@deleteTreeCategories')->name('treeCategories.delete');
	//show
	Route::get('admin/tree-categories/{id}/show','TreeCategoriesController@showTreeCategories')->name('treeCategories.show');


	Route::resource('tree-master','TreeMasterController');
	Route::get('/admin/tree-master/create','TreeMasterController@createTreeMaster')->name('treeMaster.create');
	Route::post('/admin/tree-master/create','TreeMasterController@storeTreeMaster')->name('treeMaster.store');
	Route::get('admin/tree-master/list','TreeMasterController@index')->name('treeMaster.list');
	//edit
	Route::get('admin/tree-master/{id}/edit','TreeMasterController@editTreeMaster')->name('treeMaster.edit');
	Route::patch('admin/tree-master/{id}/edit','TreeMasterController@updateTreeMaster')->name('treeMaster.update');
	//hapus
	Route::delete('admin/tree-master/{id}/delete','TreeMasterController@deleteTreeMaster')->name('treeMaster.delete');
	//show
	Route::get('admin/tree-master/{id}/show','TreeMasterController@showTreeMaster')->name('treeMaster.show');
	


	Route::resource('sides','SidesController');
	Route::get('/admin/sides/create','SidesController@createSides')->name('sides.create');
	Route::post('/admin/sides/create','SidesController@storeSides')->name('sides.store');
	Route::get('/admin/sides/list','SidesController@index')->name('sides.list');
	//edit
	Route::get('admin/sides/{id}/edit','SidesController@editSides')->name('sides.edit');
	Route::patch('admin/sides/{id}/edit','SidesController@updateSides')->name('sides.update');
	//hapus
	Route::delete('admin/sides/{id}/delete','SidesController@deleteSides')->name('sides.delete');
	//show
	Route::get('admin/sides/{id}/show','SidesController@showSides')->name('sides.show');


	Route::resource('trees','TreesController');
	Route::get('/admin/trees/create','TreesController@createTrees')->name('trees.create');
	Route::post('/admin/trees/create','TreesController@storeTrees')->name('trees.store');
	Route::get('/admin/trees/list','TreesController@index')->name('trees.list');
	//edit
	Route::get('admin/trees/{id}/edit','TreesController@editTrees')->name('trees.edit');
	Route::patch('admin/trees/{id}/edit','TreesController@updateTrees')->name('trees.update'); //menyimpan
	//hapus
	Route::delete('admin/trees/{id}/delete','TreesController@deleteTrees')->name('trees.delete');
	//show
	Route::get('admin/trees/{id}/show','TreesController@showTrees')->name('trees.show');



	Route::resource('districts','districtsController');
	Route::get('admin/districts/list','DistrictsController@index')->name('districts.list');
	Route::get('/admin/districts/create','DistrictsController@createDistricts')->name('districts.create');
	Route::post('/admin/districts/create','DistrictsController@storeDistricts')->name('districts.store');
	//edit
	Route::get('admin/districts/{id}/edit','DistrictsController@editDistricts')->name('districts.edit');
	Route::patch('admin/districts/{id}/edit','DistrictsController@updateDistricts')->name('districts.update'); //menyimpan
	//hapus
	Route::delete('admin/districts/{id}/delete','DistrictsController@deleteDistricts')->name('districts.delete');
	//show
	Route::get('admin/districts/{id}/show','DistrictsController@showDistricts')->name('districts.show');


	Route::resource('provinces','ProvincesController');
	Route::get('admin/provinces/list','ProvincesController@index')->name('provinces.list');
	Route::get('/admin/provinces/create','ProvincesController@createprovinces')->name('provinces.create');
	Route::post('/admin/provinces/create','ProvincesController@storeprovinces')->name('provinces.store');
	//edit
	Route::get('admin/provinces/{id}/edit','ProvincesController@editprovinces')->name('provinces.edit');
	Route::patch('admin/provinces/{id}/edit','ProvincesController@updateprovinces')->name('provinces.update'); //menyimpan
	//hapus
	Route::delete('admin/provinces/{id}/delete','ProvincesController@deleteProvinces')->name('provinces.delete');
	//show
	Route::get('admin/provinces/{id}/show','ProvincesController@showProvinces')->name('provinces.show');


	Route::resource('regencies','RegenciesController');
	Route::get('admin/regencies/list','RegenciesController@index')->name('regencies.list');
	Route::get('/admin/regencies/create','RegenciesController@createRegencies')->name('regencies.create');
	Route::post('/admin/regencies/create','RegenciesController@storeRegencies')->name('regencies.store');
	//edit
	Route::get('admin/regencies/{id}/edit','RegenciesController@editRegencies')->name('regencies.edit');
	Route::patch('admin/regencies/{id}/edit','RegenciesController@updateRegencies')->name('regencies.update'); //menyimpan
	//hapus
	Route::delete('admin/regencies/{id}/delete','RegenciesController@deleteRegencies')->name('regencies.delete');
	//show
	Route::get('admin/regencies/{id}/show','RegenciesController@showRegencies')->name('regencies.show');


	Route::resource('areas','AreasController');
	Route::get('/admin/areas/create','AreasController@createAreas')->name('areas.create');
	Route::post('/admin/areas/create','AreasController@storeAreas')->name('areas.store');
	Route::get('/admin/areas/list','AreasController@index')->name('areas.list');
	//edit
	Route::get('admin/areas/{id}/edit','AreasController@editAreas')->name('areas.edit');
	Route::patch('admin/areas/{id}/edit','AreasController@updateAreas')->name('areas.update');
	//hapus
	Route::delete('admin/areas/{id}/delete','AreasController@deleteAreas')->name('areas.delete');
	//show
	Route::get('admin/areas/{id}/show','AreasController@showAreas')->name('areas.show');


	//profile admin
	Route::get('admin/profileAdmin/show','AdminController@showProfileAdmin')->name('test.show');
});