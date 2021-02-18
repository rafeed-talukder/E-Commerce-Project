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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/','StudentController@index');
//
//Route::get('/',[
//    "uses"=>"StudentController@index",
//    "as"  =>"/"
//]);
//Route::get('/urlabout',[
//    "uses"=>"StudentController@about",
//    "as"  =>"/about"
//]);
//================================================================================//

Route::get('/',[
    "uses"=>"NewShopController@index",
    "as"  =>"/"
]);

Route::get('/category-product/{id}',[
    "uses"=>"NewShopController@categoryProduct",
    "as"  =>"category-product"
]);

Route::get('/product-details/{id}/{name}',[
    "uses"=>"NewShopController@productDetails",
    "as"  =>"product-details"
]);

Route::get('/brand-product/{id}',[
    "uses"=>"NewShopController@brandProduct",
    "as"  =>"brand-product"
]);

Route::get('/category-product1',[
    "uses"=>"NewShopController@categoryProduct1",
    "as"  =>"category-product1"
]);

Route::get('/mail-us',[
    "uses"=>"NewShopController@mailUs",
    "as"  =>"mail-us"
]);


//ai route ta middleware a dea hoise
//
//Route::get('/category/AddCategory',[
//    "uses"=>"CategoryController@categoryindex",
//    "as"  =>"AddCategory"
//]);
//ai route gulo middleware a dea hoise


Route::get('/category/ManageCategory',[
    "uses"=>"CategoryController@managecategory",
    "as"  =>"ManageCategory"
]);

Route::post('/category/SaveCategory',[
    "uses"=>"CategoryController@savecategory",
    "as"  =>"new-category"
]);

Route::get('/category/UnpublishedCategory/{id}',[
    "uses"=>"CategoryController@unpublishedCategory",
    "as"  =>"unpublishedCategory"
]);

Route::get('/category/PublishedCategory/{id}',[
    "uses"=>"CategoryController@publishedCategory",
    "as"  =>"publishedCategory"
]);

Route::get('/category/EditCategory/{id}',[
    "uses"=>"CategoryController@editCategory",
    "as"  =>"editCategory"
]);

Route::post('/category/UpdateCategory',[
    "uses"=>"CategoryController@updateCategory",
    "as"  =>"update-category"
]);


Route::get('/category/UpdateCategory/{id}',[
    "uses"=>"CategoryController@deletCategory",
    "as"  =>"deletCategory"
]);

Route::get('/Brand/AddBrand',[
    "uses"=>"BrandController@brandindex",
    "as"  =>"AddBrand"
]);

Route::post('/Brand/save',[
    "uses"=>"BrandController@saveBrand",
    "as"  =>"new-brand"
]);

Route::get('/product/AddProduct',[
    "uses"=>"ProductController@productindex",
    "as"  =>"AddProduct"
]);
Route::post('/product/saveProduct',[
    "uses"=>"ProductController@productsave",
    "as"  =>"saveProduct"
]);

Route::get('/product/manageProduct',[
    "uses"=>"ProductController@manageProduct",
    "as"  =>"manageProduct"
]);

Route::get('/product/edit-product/{id}',[
    "uses"=>"ProductController@editProduct",
    "as"  =>"edit-product"
]);

Route::post('/product/update-product',[
    "uses"=>"ProductController@updateProduct",
    "as"  =>"updateProduct"
]);

Route::POST('addToChart',[
    "uses"=>"ChartController@addToChart",
    "as"  =>"addToChart"
]);

Route::get('/cart/show',[
    "uses"=>"ChartController@showChart",
    "as"  =>"showChart"
]);


Route::get('/cart/delete/{id}',[
    "uses"=>"ChartController@deleteCartItem",
    "as"  =>"deleteCartItem"
]);
Route::post('/cart/update/',[
    "uses"=>"ChartController@updateCartItem",
    "as"  =>"update-cart"
]);


Route::get('/cart/checkout/',[
    "uses"=>"CheckoutController@index",
    "as"  =>"checkout"
]);

Route::POST('/customer/registration/',[
    "uses"=>"CheckoutController@customerSignUp",
    "as"  =>"customer-sign-up"
]);

Route::get('/checkout/shipping',[
    "uses"=>"CheckoutController@shipping",
    "as"  =>"shipping"
]);

Route::post('/checkout/saveShipping',[
    "uses"=>"CheckoutController@saveShipping",
    "as"  =>"new-shipping"
]);

Route::get('/checkout/payment',[
    "uses"=>"CheckoutController@paymentShipping",
    "as"  =>"payment-shipping"
]);

Route::post('/checkout/payment/order',[
    "uses"=>"CheckoutController@orderProcess",
    "as"  =>"order"
]);

Route::get('/complete/order',[
    "uses"=>"CheckoutController@completeOrder",
    "as"  =>"completeOrder"
]);

Route::POST('/customer/login',[
    "uses"=>"CheckoutController@customerLogIn",
    "as"  =>"customerLogIn"
]);


Route::POST('/customer/logout',[
    "uses"=>"CheckoutController@customerLogout",
    "as"  =>"NewCustomerLogout"
]);

Route::get('/customer/new-customer-login',[
    "uses"=>"CheckoutController@newcustomerLogin",
    "as"  =>"NewCustomerLogin"
]);


//single line middleware
Route::get('/order/manage-order',[
    "uses"=>"OrderController@manageOrder",
    "as"  =>"manageOrder",
    "middleware"=>"loginAuthCheck"
]);
////single line middleware




//ai route gulo middleware a dea hoise

//
//Route::get('/order/view-order-details/{id}',[
//    "uses"=>"OrderController@viewOrder",
//    "as"  =>"viewOrder"
//]);
//
//Route::get('/order/view-order-invoice/{id}',[
//    "uses"=>"OrderController@viewOrderInvoice",
//    "as"  =>"viewOrderInvoice"
//]);
//
//
//Route::get('/order/download-order-invoice/{id}',[
//    "uses"=>"OrderController@downloadOrderInvoice",
//    "as"  =>"downloadOrderInvoice"
//]);

//ai route gulo middleware a dea hoise




Route::group(['middleware' => ['loginAuthCheck']], function () {

    Route::get('/order/view-order-details/{id}',[
        "uses"=>"OrderController@viewOrder",
        "as"  =>"viewOrder"
    ]);

    Route::get('/order/view-order-invoice/{id}',[
        "uses"=>"OrderController@viewOrderInvoice",
        "as"  =>"viewOrderInvoice"
    ]);


    Route::get('/order/download-order-invoice/{id}',[
        "uses"=>"OrderController@downloadOrderInvoice",
        "as"  =>"downloadOrderInvoice"
    ]);

    Route::get('/category/AddCategory',[
        "uses"=>"CategoryController@categoryindex",
        "as"  =>"AddCategory"
    ]);


});

















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
