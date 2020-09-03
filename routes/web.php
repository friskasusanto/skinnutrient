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

Route::get('/', function () {
    return view('frontend.home');
});

//FRONTEND
	//Frontend/SaleController
	Route::get('/sale', 'Frontend\SaleController@index')->name('sale');

	//Frontend/GeneralController
	Route::post('/subscribe', 'Frontend\GeneralController@subscribe')->name('subscribe');
	Route::get('/shop', 'Frontend\GeneralController@product')->name('shop');
	Route::get('/whatsNew', 'Frontend\GeneralController@new')->name('new');
	Route::get('/bestSeller', 'Frontend\GeneralController@bestSeller')->name('bestSeller');

Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth', 'verified']], function ()  {

	Route::get('/home', 'HomeController@index')->name('home');

//FRONTEND
	//Frontend/SaleController
	Route::post('/wishlist/{slug}', 'Frontend\SaleController@wishlist')->name('wishlist');
	Route::post('/cart/{slug}', 'Frontend\SaleController@cart')->name('cart');

	//Frontend/DetailController
	Route::get('/detailProduct/{slug}', 'Frontend\DetailController@detail')->name('detailProduct');
	Route::post('/addCart/{slug}', 'Frontend\DetailController@addCart')->name('addCart');
	Route::post('/buy/{slug}', 'Frontend\DetailController@buy')->name('buy');

	//Frontend/CheckoutController
	Route::get('/checkout', 'Frontend\CheckoutController@checkout')->name('checkout');



//BACKEND/ADMIN

	//Backend/GeneralController
	Route::get('/ganti_password/{id}', 'Backend\GeneralController@changePass_view')->name('gantipassword');
	Route::post('/ganti_password/{id}', 'Backend\GeneralController@changePass')->name('gantipassword');

	//Backend/Admin/MenuController
    Route::get('/list_menu', 'Backend\Admin\MenuController@index')->name('list_menu');
    Route::get('/delete_menu/{id}', 'Backend\Admin\MenuController@deleteMenu')->name('delete_menu');
    Route::post('/edit_menu/{id}', 'Backend\Admin\MenuController@editMenu')->name('edit_menu');
    Route::post('/add_menu', 'Backend\Admin\MenuController@addMenu')->name('add_menu');

	//Backend/Admin/DasboardController
	Route::get('/dasboard', 'Backend\Admin\DasboardController@dasboard')->name('admin_dasboard');
	Route::post('/storeName/{id}', 'Backend\Admin\BackendController@store')->name('storeName');

	//Backend/Admin/ProductController
	Route::get('/admin/gambar_product', 'Backend\Admin\ProductController@gambar_product_view')->name('admin_gambarproduct');

	Route::get('/admin/index/product', 'Backend\Admin\ProductController@index_product')->name('admin_indexProduct');
	Route::get('/admin/edit/product/{id}', 'Backend\Admin\ProductController@edit_view_product')->name('admin_edit_view');
	Route::post('/admin/edit/product/{id}', 'Backend\Admin\ProductController@edit_product')->name('admin_edit_product');
	Route::get('/admin/delete/product/{id}', 'Backend\Admin\ProductController@delete_product')->name('admin_delete_product');
	Route::get('/admin/delete/productGambar/{id}', 'Backend\Admin\ProductController@deleteProduct_gambar')->name('admin_deleteProductGambar');
	Route::get('/admin/add_view/product', 'Backend\Admin\ProductController@add_view_product')->name('admin_add_view_product');
	Route::post('/admin/add/product', 'Backend\Admin\ProductController@add_product')->name('admin_add_product');


	//Backend/Admin/UserController
	Route::get('/admin/index', 'Backend\Admin\UserController@index')->name('admin_index');
	Route::get('/admin/edit/{id}', 'Backend\Admin\UserController@edit_view')->name('admin_edit_view');
	Route::post('/admin/edit/{id}', 'Backend\Admin\UserController@edit')->name('admin_edit');
	Route::get('/admin/delete/{id}', 'Backend\Admin\UserController@delete')->name('admin_delete');

	Route::get('/admin/konfirmasiAcc/{id}', 'Backend\Admin\UserController@emailKonfirmasi')->name('admin_konfirmasi');
	Route::get('/admin/konfirmasi', 'Backend\Admin\UserController@acountAcc')->name('admin_konfirmasiAcc');

	//Backend/Admin/CheckoutController
	Route::get('/admin/checkout/index', 'Backend\Admin\CheckoutController@index_checkout')->name('admin_index_checkout');
	Route::post('/admin/approve/checkout/{id}', 'Backend\Admin\CheckoutController@approve_admin')->name('admin_checkout.approve');
	Route::post('/admin/checkout/pengiriman/{id}', 'Backend\Admin\CheckoutController@pengiriman_barang')->name('admin_checkout_pengiriman');
	Route::post('/admin/checkout/reject/{id}', 'Backend\Admin\CheckoutController@reject_admin')->name('admin_checkout_reject');
	Route::get('/admin/checkout/detail/{id}', 'backend\admin\CheckoutController@detail_checkout')->name('admin_detail_checkout');

	//Backend/Admin/CategoryController
	Route::get('/list_category', 'Backend\Admin\CategoryController@index')->name('list_category');
    Route::get('/delete_category/{id}', 'Backend\Admin\CategoryController@deleteCategory')->name('delete_category');
    Route::post('/edit_category/{id}', 'Backend\Admin\CategoryController@editCategory')->name('edit_category');
    Route::post('/add_category', 'Backend\Admin\CategoryController@addCategory')->name('add_category');

	//Backend/Admin/GudangController
	Route::get('/admin/gudang/index', 'Backend\Admin\GudangController@index')->name('admin_index_gudang');
	Route::get('/admin/edit/gudang/{id}', 'Backend\Admin\GudangController@edit_view')->name('admin_gudang_edit');
	Route::post('/admin/gudang/edit/{id}', 'Backend\Admin\GudangController@edit')->name('admin_gudang_edit');
	Route::get('/admin/add/gudang', 'Backend\Admin\GudangController@add_view')->name('admin_gudang_add');
	Route::post('/admin/add/gudang', 'Backend\Admin\GudangController@add')->name('admin_gudang_add');
	Route::get('/admin/gudang/delete/{id}', 'Backend\Admin\GudangController@delete')->name('admin_delete_gudang');


	//LOG
	Route::get('/admin/log', 'Backend\Admin\LogController@index')->name('admin_log');



});
