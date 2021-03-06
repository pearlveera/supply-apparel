<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    // Cart::destroy();
  // echo Cart::totalItems(true);
// Let's see what we have have in there...
    return view('home');
});

Route::post('newsletter','NewsLetterController@store');
Route::group(['middleware' => 'web'], function () {
    Route::post('favorites/{product}','FavoriteController@toggle');

    Route::post('get-shops','HomeController@shop_home');
    Route::post('get-lookbooks','HomeController@lookbook_home');
    Route::get('book/{lookbook}','LookbookController@show');
    
    Route::get('search/advance','SearchController@ajax_search');
    Route::get('search','SearchController@index');

});


Route::auth();
//Route::get('logout', 'Auth\AuthController@getLogout');
Route::post('user/login','UserController@login');

Route::get('auth/facebook', 'FacebookController@redirectToProvider');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');

Route::get('auth/twitter', 'TwitterController@redirectToProvider');
Route::get('auth/twitter/callback', 'TwitterController@handleProviderCallback');

Route::get('auth/google', 'GoogleController@redirectToProvider');
Route::get('auth/google/callback', 'GoogleController@handleProviderCallback');


Route::get('/home', 'HomeController@index');


//Homepage filters
Route::group(['prefix' => 'women','middleware' => 'web'], function () {
    Route::post('best-sellers','HomeController@best_sellers_women');
    Route::post('new-arrivals','HomeController@new_arrivals_women');
    Route::post('must-haves','HomeController@must_haves_women');
});
Route::group(['prefix' => 'men','middleware' => 'web'], function () {
    Route::post('best-sellers','HomeController@best_sellers_men');
    Route::post('new-arrivals','HomeController@new_arrivals_men');
    Route::post('must-haves','HomeController@must_haves_men');
});
Route::group(['prefix' => 'kids','middleware' => 'web'], function () {
    Route::post('best-sellers','HomeController@best_sellers_kids');
    Route::post('new-arrivals','HomeController@new_arrivals_kids');
    Route::post('must-haves','HomeController@must_haves_kids');
});


Route::group(['prefix' => 'admin','middleware' => 'web'], function () {
    Route::resource('category','CategoryController');
    Route::any('category-load-by-type','CategoryController@load_category');
    Route::resource('colour','ColourController');

    //Featured Product
    Route::get('featured-product','FeaturedProductController@index');
    Route::post('featured-product','FeaturedProductController@store');
    Route::post('featured-product/delete','FeaturedProductController@destroy');
    Route::get('ajax/get-products','FeaturedProductController@get_products');

    //Featured shop
    Route::get('featured-shop','FeaturedShopController@index');
    Route::post('featured-shop','FeaturedShopController@store');
    Route::post('featured-shop/delete','FeaturedShopController@destroy');
    Route::get('ajax/get-shops','FeaturedShopController@get_shops');

    //Featured Lookbook
    Route::get('featured-lookbook','FeaturedLookbookController@index');
    Route::post('featured-lookbook','FeaturedLookbookController@store');
    Route::post('featured-lookbook/delete','FeaturedLookbookController@destroy');
    Route::get('ajax/get-lookbooks','FeaturedLookbookController@get_lookbooks');

});
//Seller
Route::get('create-boutique','ShopController@landing_page');

Route::get('become-seller','BecomeSellerController@index');
Route::post('become-seller','BecomeSellerController@store');

Route::get('my-shop/type','CreateShopController@shop_type');
Route::post('my-shop/type','CreateShopController@shop_type_store');

Route::get('my-shop/profile','CreateShopController@profile');
Route::post('my-shop/profile','CreateShopController@profile_store');

Route::get('my-shop/contact-details','CreateShopController@contact');
Route::post('my-shop/contact-details','CreateShopController@contact_store');

Route::get('membership/plans','MembershipPlansController@index');
Route::post('membership/plans/{plan}','MembershipPlansController@store');






Route::group(['middleware' => ['web','auth']], function () {
	Route::get('seller','SellerController@index'); //dashboard

    //wish list 
    Route::get('my-wishlist','MyWishlistController@index'); //dashboard

    // add product
    Route::resource('seller/product','CreateProductController');
    Route::get('seller/product/images/{product}','ProductImageController@index');
    Route::get('seller/product/image-list/{product}','ProductImageController@image_list');
    Route::post('seller/product/imageupload/{product}','ProductImageController@imageupload');
    Route::post('seller/product/delete-image/{image}','ProductImageController@delete_image');
    Route::post('seller/store-product-color/{image}','ProductImageController@store_product_color');
    Route::post('seller/product/publish/{product}','ProductImageController@publish_product');

    //my order
    Route::get('my-order','MyOrderController@index');
    Route::post('order/accept/{item}','MyOrderController@update_order');
    //my messages
    Route::get('my-messages','MyMessagesController@index');
    //my accoutn 
    Route::get('my-account','MyAccountController@index');


});

// Blog functions
Route::group(['middleware' => ['web','auth']], function () {
	Route::get('blog/edit','CreateBlogController@edit');
	Route::post('blog/edit','CreateBlogController@update');
	Route::get('blog/view','CreateBlogController@view');
	Route::get('blog/delete','CreateBlogController@delete');

	Route::get('blog/create','CreateBlogController@index');
	Route::post('blog/create','CreateBlogController@create');
});


// Look book
Route::group(['middleware' => ['web','auth']], function () {
    Route::get('lookbook/edit','CreateLookbookController@edit');
    Route::post('lookbook/edit','CreateLookbookController@update');
    Route::get('lookbook/view','CreateLookbookController@view');
    Route::get('lookbook/delete','CreateLookbookController@delete');

    Route::get('lookbook/create','CreateLookbookController@index');
    Route::post('lookbook/create','CreateLookbookController@create');
});



//products
Route::get('product/{product}','ProductsController@single_product');
Route::post('product/{product}/image-gallery','ProductsController@colours');

Route::get('men-clothing','MenProductsController@index');

//add to cart
Route::post('add-to-cart','CartController@store');
Route::any('my-cart','CartController@view');
Route::post('cart-remove-item','CartController@delete_cart');

//filter 
Route::get('men-clothing','MenProductsController@index');
Route::post('men-clothing','MenProductsController@mens_filter');

Route::get('women-clothing','WomenProductsController@index');
Route::post('women-clothing','WomenProductsController@filter');

Route::get('kids-clothing','KidsProductsController@index');
Route::post('kids-clothing','KidsProductsController@filter');

//store
Route::get('store/{shop}','StoreController@store');
Route::post('store/{shop}','StoreController@filter');



//checkout
Route::group(['middleware' => ['web','auth']], function () {


    Route::get('checkout','CheckoutController@index');
    
    Route::post('checkout','CheckoutController@save_shipping');

     Route::get('payment','PaymentController@index');
     Route::post('payment','PaymentController@charge_from_card');
});





//messages
Route::group(['prefix' => 'messages','middleware' => ['web','auth']], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    //Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

Route::post('product/{product}/contact-seller','MessagesController@store');
Route::post('withdrawal/request','WithdrawalController@store');