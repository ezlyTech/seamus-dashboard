<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Controllers\SalesController;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

use App\Http\Livewire\Orders;
use App\Http\Livewire\Billings;
use App\Http\Livewire\Shipment;

use App\Http\Livewire\General;
use App\Http\Livewire\Import;
use App\Http\Livewire\View;

use Illuminate\Http\Request;

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

Route::get('/', function() {
    return redirect('/login');
});

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');

    // Route::get('/sales-page', [SalesController::class, 'index'])->name('sales');
    Route::get('/orders', [\App\Http\Livewire\Orders::class, '__invoke'])->name('orders');
    Route::get('/billings', Billings::class)->name('billings');
    Route::get('/shipment', Shipment::class)->name('shipment');
    Route::get('/general-settings', General::class)->name('general-settings');
    Route::get('/orders/import', Import::class)->name('import');
    Route::post('/importfile', [Import::class, 'importfile'])->name('import-sales');
    Route::get('/orders/{orderId}', View::class)->name('order-details');
});

