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


	//Frontend/CommentController
	Route::post('/comment/{judul}', 'Frontend\CommentController@commentBlog')->name('comment');

	//Frontend/HomeController
	Route::get('/', 'Frontend\HomeController@home')->name('');

	//Frontend/BlogController
	Route::get('/blogs', 'Frontend\BlogController@blog')->name('blog');
	Route::get('/blogsDetail/{judul}', 'Frontend\BlogController@detail')->name('blogsDetail');

	//Frontend/SaleController
	Route::get('/sale', 'Frontend\SaleController@index')->name('sale');
	Route::get('/wishlist/{slug}', 'Frontend\SaleController@wishlist')->name('wishlist');
	Route::get('/cart/{slug}', 'Frontend\SaleController@cart')->name('cart');


	//Frontend/GeneralController
	Route::post('/subscribe', 'Frontend\GeneralController@subscribe')->name('subscribe');
	Route::get('/shop', 'Frontend\GeneralController@product')->name('shop');
	Route::get('/whatsNew', 'Frontend\GeneralController@new')->name('new');
	Route::get('/bestSeller', 'Frontend\GeneralController@bestSeller')->name('bestSeller');
	Route::get('/aboutUs', 'Frontend\GeneralController@aboutUs')->name('aboutUs');
	Route::get('/faq', 'Frontend\GeneralController@faq')->name('faq');
	Route::get('/privacyPolicy', 'Frontend\GeneralController@privacyPolicy')->name('privacyPolicy');
	Route::get('/sitemap', 'Frontend\GeneralController@sitemap')->name('sitemap');
	Route::get('/contact', 'Frontend\GeneralController@contact')->name('contact');
	Route::get('/pengaduan', 'Frontend\GeneralController@pengaduan')->name('pengaduan');
	Route::get('/botanic', 'Frontend\GeneralController@botanic')->name('botanic');
	Route::get('/compare', 'Frontend\GeneralController@compare')->name('compare');
	Route::get('/categ', 'Frontend\GeneralController@categ')->name('categ');

	//Frontend/PengaduanController
	Route::post('/pengaduan', 'Frontend\PengaduanController@pengaduan')->name('pengaduan');


	//Frontend/DetailController
	Route::get('/detailProduct/{slug}', 'Frontend\DetailController@detail')->name('detailProduct');
	Route::post('/addCart/{slug}', 'Frontend\DetailController@addCart')->name('addCart');
	Route::post('/buy/{slug}', 'Frontend\DetailController@buy')->name('buy');
	Route::post('/review/{slug}', 'Frontend\DetailController@review')->name('review');


Auth::routes(['verify' => true]);
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['middleware' => ['auth', 'verified']], function ()  {

	Route::get('/home', 'HomeController@index')->name('home');

//FRONEND

	//Frontend/CheckoutController
	Route::get('/checkout', 'Frontend\CheckoutController@checkout')->name('checkout');
	Route::post('/checkout', 'Frontend\CheckoutController@checkout_store')->name('checkoutstore');

	//Frontend/CartController
	Route::get('/cartDelete/{id}', 'Frontend\CartController@delete')->name('cartDelete');
	Route::post('/cartQuantity/{id}', 'Frontend\CartController@quantity')->name('cartQuantity');
	Route::get('/cart', 'Frontend\CartController@cart')->name('cart');
	Route::get('/cartTocheckout', 'Frontend\CartController@checkoutAdd')->name('cartTocheckout');
	Route::get('/checkoutWishlist', 'Frontend\WishlistController@checkoutWish')->name('checkoutWish');

	//Frontend/WishlistController
	Route::get('/wishlist', 'Frontend\WishlistController@wishlist')->name('wishlist');
	Route::get('/wishlistDelete/{id}', 'Frontend\WishlistController@delete')->name('deleteWishlist');
	Route::get('/addWishlistCart/{id}', 'Frontend\WishlistController@addCart')->name('addWishlistCart');



//BACKEND/ADMIN

	//Backend/BannerController
	Route::get('/admin/banner', 'Backend\Admin\BannerController@index')->name('banner');
	Route::post('/admin/editBanner/{id}', 'Backend\Admin\BannerController@edit')->name('editbanner');
	Route::post('/admin/addBanner', 'Backend\Admin\BannerController@add')->name('addbanner');

	//Backend/SalesController
	Route::get('/admin/sales', 'Backend\Admin\SalesController@index')->name('sales');
	Route::post('/admin/addSales', 'Backend\Admin\SalesController@add')->name('add_sales');
	Route::post('/admin/editSales/{id}', 'Backend\Admin\SalesController@edit')->name('editsales');
	Route::get('/admin/hapusSales/{id}', 'Backend\Admin\SalesController@delete')->name('hapus_sales');

	//Backend/TokoController
	Route::get('/admin/toko', 'Backend\Admin\TokoController@index')->name('toko');
	Route::post('/admin/addToko', 'Backend\Admin\TokoController@add')->name('add_toko');
	Route::post('/admin/editToko/{id}', 'Backend\Admin\TokoController@edit')->name('edit_toko');
	Route::get('/admin/hapusToko/{id}', 'Backend\Admin\TokoController@delete')->name('hapus_toko');

	//Backend/DistributorController
	Route::get('/admin/distributor', 'Backend\Admin\DistributorController@index')->name('distributor');
	Route::post('/admin/addDistributor', 'Backend\Admin\DistributorController@add')->name('add_distributor');
	Route::post('/admin/editDistributor/{id}', 'Backend\Admin\DistributorController@edit')->name('edit_distributor');
	Route::get('/admin/hapusDistributor/{id}', 'Backend\Admin\DistributorController@delete')->name('hapus_distributor');

	//Backend/JenisController
	Route::get('/admin/jenisProduct', 'Backend\Admin\JenisController@index')->name('admin_jenisProduct');
	Route::post('/admin/addjenisProduct', 'Backend\Admin\JenisController@add')->name('admin_jenisProduct');
	Route::post('/admin/editjenisProduct/{id}', 'Backend\Admin\JenisController@edit')->name('admin_editjenisProduct');
	Route::get('/admin/hapusjenisProduct/{id}', 'Backend\Admin\JenisController@delete')->name('admin_hapusJenis');

	//Backend/BlogController
	Route::get('/admin/editBlog/{id}', 'Backend\Admin\BlogController@edit_view')->name('admin_editBlogView');
	Route::post('/admin/editBlog/{id}', 'Backend\Admin\BlogController@edit')->name('admin_editBlog');
	Route::get('/admin/blog', 'Backend\Admin\BlogController@index')->name('admin_blog');
	Route::get('/admin/addBlog', 'Backend\Admin\BlogController@add_view')->name('admin_addBlogView');
	Route::post('/admin/addBlog', 'Backend\Admin\BlogController@add')->name('admin_addBlog');
	Route::get('/admin/hapusBlog/{id}', 'Backend\Admin\BlogController@delete')->name('admin_hapusBlog');

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
	Route::get('/admin/delete/productCategory/{id}', 'Backend\Admin\ProductController@hapusCategory')->name('admin_hapusCategory');
	Route::get('/admin/gambar_product', 'Backend\Admin\ProductController@gambar_product_view')->name('admin_gambarproduct');

	Route::get('/admin/editProduct/product/{id}', 'Backend\Admin\ProductController@editProduct')->name('admin_editProduct');
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
	Route::get('/list_menu', 'Backend\Admin\CategoryController@menu')->name('list_menu');
	Route::get('/list_category', 'Backend\Admin\CategoryController@index')->name('list_category');
    Route::get('/delete_category/{id}', 'Backend\Admin\CategoryController@deleteCategory')->name('delete_category');
    Route::post('/edit_category/{id}', 'Backend\Admin\CategoryController@editCategory')->name('edit_category');
    Route::post('/add_category', 'Backend\Admin\CategoryController@addCategory')->name('add_category');

	//Backend/Admin/GudangController
	Route::get('/admin/gudang/index', 'Backend\Admin\GudangController@index')->name('admin_index_gudang');
	Route::post('/admin/gudang/edit/{id}', 'Backend\Admin\GudangController@edit')->name('admin_gudang_edit');
	Route::get('/admin/add/gudang', 'Backend\Admin\GudangController@add_view')->name('admin_gudang_add');
	Route::post('/admin/add/gudang', 'Backend\Admin\GudangController@add')->name('admin_gudang_add');
	Route::get('/admin/gudang/delete/{id}', 'Backend\Admin\GudangController@delete')->name('admin_delete_gudang');
	Route::post('/admin/gudang/log/{id}', 'Backend\Admin\GudangController@keluarMasuk')->name('admin_log_gudang');


	//LOG
	Route::get('/admin/log', 'Backend\Admin\LogController@index')->name('admin_log');

	//Backend/Admin/PengaduanController
	Route::get('/admin/pengaduan', 'Backend\Admin\PengaduanController@index')->name('admin_pengaduan');



});
