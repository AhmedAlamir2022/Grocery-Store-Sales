<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SOfferController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('frontend.index'); });
Route::get('/contactme',[ContactController::class, 'Contact'])->name('contact.me');
Route::post('/store/message',[ContactController::class, 'StoreMessage'])->name('store.message');
Route::get('/about', function () { return view('frontend.about'); });
Route::get('/products', function () { return view('frontend.products'); });
Route::get('/product/details/{id}',[ProductController::class, 'ProductDetails'])->name('product.details');
Route::get('/category/products/{id}',[ProductController::class, 'CategoryProduct'])->name('category.product');

Route::post('/store/subscription',[SubscriptionController::class, 'StoreOne'])->name('store.sub');



Route::prefix('admin')->group(function(){
	Route::get('login',[AdminController::class,'Index'])->name('login_form');
	Route::post('/login/admin',[AdminController::class,'Login'])->name('admin.login');
	Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/change/password',[AdminController::class, 'ChangePassword'])->name('change.password')->middleware('admin');
    Route::post('/update/password',[AdminController::class, 'UpdatePassword'])->name('update.password')->middleware('admin');
    Route::get('/profile',[AdminController::class, 'Profile'])->name('admin.profile')->middleware('admin');
    Route::post('/store/profile',[AdminController::class, 'StoreProfile'])->name('store.profile')->middleware('admin');
    
    Route::get('/all/Users',[AdminController::class, 'AllUsers'])->name('all.users')->middleware('admin');
    Route::post('/delete/user/{id}',[AdminController::class, 'DeleteUser'])->name('delete.user')->middleware('admin');

    Route::get('/all/admins',[AdminController::class, 'AllAdmins'])->name('all.admins')->middleware('admin');
    Route::post('/delete/admin/{id}',[AdminController::class, 'DeleteAdmin'])->name('delete.admin')->middleware('admin');
    Route::post('/add/admin',[AdminController::class,'AddAdmin'])->name('add.admin')->middleware('admin');

    Route::get('/all/employees',[AdminController::class, 'AllEmployees'])->name('all.employees')->middleware('admin');
    Route::post('/delete/employee/{id}',[AdminController::class, 'DeleteEmployee'])->name('delete.employee')->middleware('admin');
    Route::post('/add/employee',[AdminController::class,'AddEmployee'])->name('add.employee')->middleware('admin');
    Route::post('/edit/employee/{id}',[AdminController::class, 'EditEmployee'])->name('edit.employee')->middleware('admin');

    Route::get('/all/categories',[CategoryController::class, 'AllCategory'])->name('all.categories')->middleware('admin');
    Route::post('/delete/category/{id}',[CategoryController::class, 'DeleteCategory'])->name('delete.category')->middleware('admin');
    Route::post('/add/category',[CategoryController::class,'AddCategory'])->name('add.category')->middleware('admin');
    Route::post('/edit/category/{id}',[CategoryController::class, 'EditCategory'])->name('edit.category')->middleware('admin');

    Route::get('/all/messages',[ContactController::class, 'AllMessages'])->name('all.messages')->middleware('admin');
    Route::post('/delete/message/{id}',[ContactController::class, 'DeleteMessage'])->name('delete.message')->middleware('admin');

    Route::resource('Query', QueryController::class);

    Route::get('/all/subscriptions',[SubscriptionController::class, 'AllSubscriptions'])->name('all.subscriptions')->middleware('admin');
    Route::post('/delete/subscribe/{id}',[SubscriptionController::class, 'DeleteSubscription'])->name('delete.subscripe')->middleware('admin');

    Route::resource('Brand', BrandController::class);

    Route::get('/testimonials',[TestimonialController::class, 'AllTestimonials'])->name('all.testimoinals');
    Route::post('/delete/testimonial/{id}',[TestimonialController::class, 'DeleteTestimonial'])->name('delete.testimonial')->middleware('admin');
    Route::post('/edit/testimonials/{id}',[TestimonialController::class, 'EditTestimonial'])->name('edit.testimonial')->middleware('admin');
    Route::post('/delete/testimonial/{id}',[TestimonialController::class, 'DeleteTestimonial'])->name('delete.testimonial')->middleware('admin');

    Route::get('/all/products',[ProductController::class, 'AllProducts'])->name('all.products')->middleware('admin');
    Route::get('/add/product',[ProductController::class, 'AddProduct'])->name('add.product')->middleware('admin');
    Route::post('/store/product',[ProductController::class, 'StoreProduct'])->name('store.product')->middleware('admin');
    Route::post('/delete/product/{id}',[ProductController::class, 'DeleteProduct'])->name('delete.product')->middleware('admin');
    Route::get('/edit/product/{id}',[ProductController::class, 'EditProduct'])->name('edit.product')->middleware('admin');
    Route::post('/update/product',[ProductController::class, 'UpdateProduct'])->name('update.product')->middleware('admin');

    Route::get('/all/offers',[OfferController::class, 'AllOffers'])->name('all.offers')->middleware('admin');
    Route::get('/add/offer',[OfferController::class, 'AddOffer'])->name('add.offer')->middleware('admin');
    Route::post('/store/offer',[OfferController::class, 'StoreOffer'])->name('store.offer')->middleware('admin');
    Route::post('/delete/offer/{id}',[OfferController::class, 'DeleteOffer'])->name('delete.offer')->middleware('admin');
    Route::get('/edit/offer/{id}',[OfferController::class, 'EditOffer'])->name('edit.offer')->middleware('admin');
    Route::post('/update/offer',[OfferController::class, 'UpdateOffer'])->name('update.offer')->middleware('admin');

    Route::get('/all/soffers',[SOfferController::class, 'AllSOffers'])->name('all.soffers')->middleware('admin');
    Route::get('/add/soffer',[SOfferController::class, 'AddSOffer'])->name('add.soffer')->middleware('admin');
    Route::post('/store/soffer',[SOfferController::class, 'StoreSOffer'])->name('store.soffer')->middleware('admin');
    Route::post('/delete/soffer/{id}',[SOfferController::class, 'DeleteSOffer'])->name('delete.soffer')->middleware('admin');
    Route::get('/edit/soffer/{id}',[SOfferController::class, 'EditSOffer'])->name('edit.soffer')->middleware('admin');
    Route::post('/update/soffer',[SOfferController::class, 'UpdateSOffer'])->name('update.soffer')->middleware('admin');

    Route::get('/report/product',[ProductController::class, 'ReportProduct'])->name('report.product')->middleware('admin');
    Route::post('search/product/report',[ProductController::class, 'SearchProductReport'])->name('search.product_report')->middleware('admin');

    Route::get('/report/user',[UserController::class, 'ReportUser'])->name('report.user')->middleware('admin');
    Route::post('search/user/report',[UserController::class, 'SearchUserReport'])->name('search.user_report')->middleware('admin');

    Route::get('/all/orders',[OrderController::class, 'AllOrders'])->name('all.orders')->middleware('admin');
});

Route::prefix('employee')->group(function(){
	Route::get('login',[EmployeeController::class,'Index'])->name('employee_login');
	Route::post('/login/employee',[EmployeeController::class,'Login'])->name('employee.login');
	Route::get('/dashboard',[EmployeeController::class,'Dashboard'])->name('employee.dashboard')->middleware('employee');
    Route::get('/logout',[EmployeeController::class,'EmployeeLogout'])->name('employee.logout')->middleware('employee');
    Route::get('/change/password',[EmployeeController::class, 'ChangePassword'])->name('employee.password')->middleware('employee');
    Route::post('/update/password',[EmployeeController::class, 'UpdatePassword'])->name('new.password')->middleware('employee');
    Route::get('/profile',[EmployeeController::class, 'Profile'])->name('employee.profile')->middleware('employee');
    Route::post('/store/profile',[EmployeeController::class, 'StoreProfile'])->name('new.profile')->middleware('employee');

    Route::get('/all/categories',[CategoryController::class, 'EAllCategory'])->name('eall.categories')->middleware('employee');
    Route::post('/delete/category/{id}',[CategoryController::class, 'EDeleteCategory'])->name('edelete.category')->middleware('employee');
    Route::post('/add/category',[CategoryController::class,'EAddCategory'])->name('eadd.category')->middleware('employee');
    Route::post('/edit/category/{id}',[CategoryController::class, 'EEditCategory'])->name('eedit.category')->middleware('employee');

    Route::get('/all/products',[ProductController::class, 'EAllProducts'])->name('eall.products')->middleware('employee');
    Route::get('/add/product',[ProductController::class, 'EAddProduct'])->name('eadd.product')->middleware('employee');
    Route::post('/store/product',[ProductController::class, 'EStoreProduct'])->name('estore.product')->middleware('employee');
    Route::post('/delete/product/{id}',[ProductController::class, 'EDeleteProduct'])->name('edelete.product')->middleware('employee');
    Route::get('/edit/product/{id}',[ProductController::class, 'EEditProduct'])->name('eedit.product')->middleware('employee');
    Route::post('/update/product',[ProductController::class, 'EUpdateProduct'])->name('eupdate.product')->middleware('employee');

    Route::get('/report/user',[UserController::class, 'EReportUser'])->name('ereport.user')->middleware('employee');
    Route::post('search/user/report',[UserController::class, 'ESearchUserReport'])->name('esearch.user_report')->middleware('employee');
    Route::get('/report/product',[ProductController::class, 'EReportProduct'])->name('ereport.product')->middleware('employee');
    Route::post('search/product/report',[ProductController::class, 'ESearchProductReport'])->name('esearch.product_report')->middleware('employee');

    Route::get('/all/offers',[OfferController::class, 'EAllOffers'])->name('eall.offers')->middleware('employee');
    Route::get('/add/offer',[OfferController::class, 'EAddOffer'])->name('eadd.offer')->middleware('employee');
    Route::post('/store/offer',[OfferController::class, 'EStoreOffer'])->name('estore.offer')->middleware('employee');
    Route::post('/delete/offer/{id}',[OfferController::class, 'EDeleteOffer'])->name('edelete.offer')->middleware('employee');
    Route::get('/edit/offer/{id}',[OfferController::class, 'EEditOffer'])->name('eedit.offer')->middleware('employee');
    Route::post('/update/offer',[OfferController::class, 'EUpdateOffer'])->name('eupdate.offer')->middleware('employee');
    
    Route::get('/all/soffers',[SOfferController::class, 'EAllSOffers'])->name('eall.soffers')->middleware('employee');
    Route::get('/add/soffer',[SOfferController::class, 'EAddSOffer'])->name('eadd.soffer')->middleware('employee');
    Route::post('/store/soffer',[SOfferController::class, 'EStoreSOffer'])->name('estore.soffer')->middleware('employee');
    Route::post('/delete/soffer/{id}',[SOfferController::class, 'EDeleteSOffer'])->name('edelete.soffer')->middleware('employee');
    Route::get('/edit/soffer/{id}',[SOfferController::class, 'EEditSOffer'])->name('eedit.soffer')->middleware('employee');
    Route::post('/update/soffer',[SOfferController::class, 'EUpdateSOffer'])->name('eupdate.soffer')->middleware('employee');

    Route::get('/all/orders',[OrderController::class, 'EAllOrders'])->name('eall.orders')->middleware('employee');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile',[UserController::class, 'Profile'])->name('user.profile');
    Route::post('/store/profile',[userController::class, 'StoreProfile'])->name('user.update.profile');
    Route::get('/password',[UserController::class, 'ChangePassword'])->name('user.change.password');
    Route::post('/update/password',[UserController::class, 'UpdatePassword'])->name('user.update.password');
    Route::get('/logout',[UserController::class, 'destroy'])->name('user.logout');

    Route::get('/testimonials',[TestimonialController::class, 'MyTestimonials'])->name('user.testimoinals');
    Route::post('/store/testimonial',[TestimonialController::class, 'StoreTestimonial'])->name('store.testimonial');

    Route::get('/user/offers', function () { return view('user.useroffers'); });

    Route::post('/make/order',[OrderController::class, 'MakeOrder'])->name('make.order');
    Route::get('/my/orders',[ProductController::class, 'MyOrders'])->name('user.orders');

   
});

require __DIR__.'/auth.php';
