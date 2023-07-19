<?php

use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\AdminWorkersController;
use App\Http\Controllers\AminUserBiodataController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanydataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentUserdataController;
use App\Http\Controllers\ReviewRatingController;
use App\Http\Controllers\TestmailController;
use App\Http\Controllers\UserBiodataController;
use App\Http\Controllers\ViewBioDataController;
use App\Http\Controllers\WorkersController;
use App\Http\Controllers\WorkersTokenController;
use Illuminate\Support\Facades\Auth;

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
// front page
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('pages.others.index');
// })->name('index');
Route::get('/', [CompanyController::class, 'showIndex'])->name('index');

Route::get('/about', function () {
    return view('pages.others.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.others.contact');
})->name('contact');
// Route::get('/blog', [CompanyController::class, 'blogController'])->name('blog');
// Route::get('/blog/{slug}', [CompanyController::class, 'SlugblogController']);

// Route::get('/blog', function () {
//     return view('pages.others.blog');
// })->name('blog');

Route::get('/faq', function () {
    return view('pages.others.faq');
})->name('faq');

// Route::get('/list', function () {
//     return view('pages.others.listing-result059b');
// })->name('listing1');

// Route::get('/list2', function () {
//     return view('pages.others.listing-result095d');
// })->name('listing2');

// Route::get('/listt3', function () {
//     return view('pages.others.listing-resultbc38');
// })->name('searchList');

Route::get('/listt3', [CompanyController::class, 'userindex'])->name('searchList');
Route::get('/viewdetials/{id}', [CompanyController::class, 'show'])->name('listing3');
#Manage Review

Route::post('/review-store',[CompanyController::class, 'reviewstore'])->name('review.store');

Route::get('/search',[CompanyController::class, 'searchindex'])->name('searchh');
Route::post('/search',[CompanyController::class, 'searchindex'])->name('search');




// Route::post('/post-view/{id}',[CompanyController::class, 'view'])->name('post.view');
// Route::post('/usersC', [ReviewRatingController::class, 'store'])->name('registerDetailStore');

// Route::get('/usersC', [ReviewRatingController::class, 'index'])->name('registerDetailStore');







Route::get('/pricing', function () {
    return view('pages.others.pricing');
})->name('pricing');

Route::get('/privacy', function () {
    return view('pages.others.privacy-policy');
})->name('privacy');

Route::get('/terms', function () {
    return view('pages.others.terms-and-conditions');
})->name('terms');

// listing
// Route::get('/listing', function () {
//     return view('pages.listing.saybrook-point-resort-marina');
// })->name('listing1');
// Route::get('/listing', function () {
//     return view('pages.listing.ruby-tuesday');
// })->name('listing1');

// Route::get('/listing2', function () {
//     return view('pages.listing.duane-wright-realty');
// })->name('listing2');

// Route::get('/listing3', function () {
//     return view('pages.listing.chicago-medical-center');
// })->name('listing3');

Route::get('/listing4', function () {
    return view('pages.listing.57-fitness');
})->name('listing4');

// location
// Route::get('/location', function () {
//     return view('pages.listing.location.all');
// })->name('location');


// Route::get('/location1', function () {
//     return view('pages.listing.location.Khulna');
// })->name('location1');

// Route::get('/location2', function () {
//     return view('pages.listing.location.newyork');
// })->name('location2');
// Route::get('/location3', function () {
//     return view('pages.listing.location.paris');
// })->name('location3');
// Route::get('/location4', function () {
//     return view('pages.listing.location.tokyo');
// })->name('location4');
// Route::get('/location5', function () {
//     return view('pages.listing.location.london');
// })->name('location5');
// Route::get('/location6', function () {
//     return view('pages.listing.location.chicago');
// })->name('location6');



Route::get('/users', [UserBiodataController::class, 'index'])->name('registerUser');
Route::post('/users', [UserBiodataController::class, 'store'])->name('registerUserStore');

Route::get('/usersC', [CompanyController::class, 'index'])->name('registerDetails');
Route::post('/usersC', [CompanyController::class, 'store'])->name('registerDetailStore');

Route::get('/Review', [ReviewRatingController::class, 'index'])->name('ratingDetails');
Route::post('/ReviewC', [ReviewRatingController::class, 'store'])->name('ratingDetailStore');
// ->middleware('role:marketer')

Route::get('/Worker', [MarketController::class, 'index'])->name('WorkerDetails');
Route::post('/Workerm', [MarketController::class, 'store'])->name('WorkerDetailStore');
Route::get('/Workervm', [MarketController::class, 'viewWorker'])->name('ViewWorkerDetail');





Route::get('/WorkerUserToken', [WorkersTokenController::class, 'index'])->name('WorkerUserTokenDetails');
Route::post('/WorkerUserToken', [WorkersTokenController::class, 'store'])->name('WorkerUserTokenDetailStore');


// Route::get('/BlogUsercomment', [WorkersTokenController::class, 'index'])->name('BlogUsercommentDetails');
// Route::post('/BlogUsercomment', [WorkersTokenController::class, 'store'])->name('BlogUsercommentDetailStore');

Route::get('/WorkersDashboard', [MarketController::class, 'indexWorkersDash'])->name('WorkerDashboard');


// Route::get('/usersC', function () {
//     return view('userdashboard.companyregistration');
// })->name('registerDetails');

// Route::get('/userspay', function () {
//     return view('userdashboard.paymentdashboard');
// })->name('PaymentDetails');

Route::get('/userspay', [PaymentUserdataController::class, 'index'])->name('PaymentDetails');
Route::get('/payment', [PaymentUserdataController::class, 'Payindex'])->name('Paymentindex');


Route::get('/viewbio', [ViewBioDataController::class, 'index'])->name('Viewbio');

Route::get('/companydetails', [CompanydataController::class, 'index'])->name('Viewcompanydetails');

// Route::get('/viewbio', function () {
//     return view('userdashboard.viewbiodata');
// })->name('Viewbio');




//admin from voyager


//payment get way paystack
Route::get('/pay', [PaymentController::class, 'pay']);
Route::post('/pay', [PaymentController::class, 'make_payment'])->name('pay');
Route::get('/pay/callback', [PaymentController::class, 'payment_callback'])->name('pay.callback');

// Route::get('/pay/callback', [PaymentController::class, 'payment_callback'])->name('PaymentDetails');// user authentication

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/email', [TestmailController::class, 'index']);
Route::post('/email', [TestmailController::class, 'store'])->name('send.email');

Route::get('/messageArtisan', [CompanyController::class, 'index']);
Route::post('/messageArtisan', [CompanyController::class, 'messageArtisan'])->name('send.usersemail');


Route::get('/usersreport', [CompanyController::class, 'index']);
Route::post('/usersreport', [CompanyController::class, 'userReport'])->name('send.usersreport');




// admin company
Route::get('/adminview', [AdminCompanyController::class, 'index'])->name('adminview');
Route::get('/adminviewinsert', [AdminCompanyController::class, 'adminInsertPage'])->name('adminindexview');
Route::post('/admininsert', [AdminCompanyController::class, 'store'])->name('admininsert');
Route::get('/adminedit/{id}', [AdminCompanyController::class, 'gotocreate'])->name('adminedit');
Route::put('/adminupdate/{id}', [AdminCompanyController::class, 'update'])->name('adminupdate');
Route::get('/adminshow/{id}', [AdminCompanyController::class, 'show'])->name('adminshow');
Route::delete('/admindelete/{id}', [AdminCompanyController::class, 'destroy'])->name('admindelete');


// admin userbiodata 
Route::get('/adminviewuserbiodata ', [AminUserBiodataController::class, 'index'])->name('adminviewuserbiodata ');
Route::put('/admininsertuserbiodata ', [AminUserBiodataController::class, 'store'])->name('admininsertuserbiodata ');
Route::get('/adminedituserbiodata/{id} ', [AminUserBiodataController::class, 'gotocreate'])->name('adminedituserbiodata ');
Route::put('/adminupdatebiodata/{id}', [AminUserBiodataController::class, 'update'])->name('adminupdateuserbiodata');
Route::get('/adminshowuserbiodata /{id}', [AminUserBiodataController::class, 'show'])->name('adminshowuserbiodata ');
Route::get('/admindeleteuserbiodata ', [AminUserBiodataController::class, 'destroy'])->name('admindeleteuserbiodata ');






// admin artisanuser

Route::get('/adminviewartisan', [AdminCompanyController::class, 'index'])->name('adminviewartisan');
Route::put('/admininsertartisan', [AdminCompanyController::class, 'store'])->name('admininsertartisan');
Route::get('/admineditartisan', [AdminCompanyController::class, 'update'])->name('adminupdateartisan');
Route::get('/admineditartisan/{id} ', [AminUserBiodataController::class, 'gotocreate'])->name('admineditartisan ');
Route::get('/adminshowartisan/{id}', [AdminCompanyController::class, 'show'])->name('adminshowartisan');
Route::delete('/admindeleteartisan', [AdminCompanyController::class, 'destroy'])->name('admindeleteartisan');

// admin employee
Route::get('/adminviewemployee', [AdminWorkersController::class, 'index'])->name('adminviewemployee');
Route::put('/admininsertemployee', [AdminWorkersController::class, 'store'])->name('admininsertemployee');
Route::get('/admineditemployee', [AdminWorkersController::class, 'update'])->name('adminupdateemployee');
Route::get('/admineditemployee/{id} ', [AminUserBiodataController::class, 'gotocreate'])->name('admineditemployee ');

Route::get('/adminshowemployee/{id}', [AdminWorkersController::class, 'show'])->name('adminshowemployee');
Route::get('/admindeleteemployee', [AdminWorkersController::class, 'destroy'])->name('admindeleteemployee');







// admin payment details
Route::get('/adminviewpayment', [AdminCompanyController::class, 'index'])->name('adminviewpayment');
Route::put('/admininsertpayment', [AdminCompanyController::class, 'store'])->name('admininsertpayment');
Route::get('/admineditpayment', [AdminCompanyController::class, 'update'])->name('adminupdatepayment');
Route::get('/admineditpayment/{id} ', [AminUserBiodataController::class, 'gotocreate'])->name('admineditpayment');

Route::get('/adminshowpayment/{id}', [AdminCompanyController::class, 'show'])->name('adminshowpayment');
Route::get('/admindeletepayment', [AdminCompanyController::class, 'destroy'])->name('admindeletepayment');

// admin artisan employee payment details
Route::get('/adminviewemployeepayment', [AdminCompanyController::class, 'index'])->name('adminviewemployeepayment');
Route::put('/admininsertemployeepayment', [AdminCompanyController::class, 'store'])->name('admininsertemployeepayment');
Route::get('/admineditemployeepayment', [AdminCompanyController::class, 'update'])->name('adminudateemployeepayment');
Route::get('/admineditemployeepayment/{id} ', [AminUserBiodataController::class, 'gotocreate'])->name('admineditemployeepayment');

Route::get('/adminshowemployeepayment/{id}', [AdminCompanyController::class, 'show'])->name('adminshowemployeepayment');
Route::get('/admindeleteemployeepayment', [AdminCompanyController::class, 'destroy'])->name('admindeleteemployeepayment');



// admin rating
Route::get('/adminviewrating', [AdminCompanyController::class, 'index'])->name('adminviewrating');
Route::put('/admininsertrating', [AdminCompanyController::class, 'store'])->name('admininsertrating');
Route::get('/adminudaterating', [AdminCompanyController::class, 'update'])->name('adminupdaterating');
Route::get('/admineditrating/{id} ', [AminUserBiodataController::class, 'gotocreate'])->name('admineditrating');

Route::get('/adminshowrating/{id}', [AdminCompanyController::class, 'show'])->name('adminshowrating');
Route::get('/admindeleterating', [AdminCompanyController::class, 'destroy'])->name('admindeleterating');



