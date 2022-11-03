<?php
use App\Http\Controllers;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{any}', function () {
    return view('welcome');
})->where('any','.*');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/manager_dashboard', [App\Http\Controllers\HomeController::class, 'manager_dashboard'])->name('manager_dashboard');
Route::get('/two_factor', [App\Http\Controllers\HomeController::class, 'two_factor'])->name('two_factor');
Route::post('/register_user', [Controllers\AdminController::class, 'register_user'])->name('register_user');
Route::get('/success_password', [Controllers\auth\ResetPasswordController::class, 'success_password'])->name('success_password');
Route::get('/uder', [Controllers\AdminController::class, 'uder'])->name('uder');
Route::get('/verify_otp', [Controllers\auth\LoginController::class, 'verify_otp'])->name('verify_otp');
Route::post('/otpVerify', [Controllers\AdminController::class, 'otpVerify'])->name('otpVerify');
Route::get('/all_user', [Controllers\AdminController::class, 'all_user'])->name('all_user');
Route::get('/view_profile', [Controllers\AdminController::class, 'index'])->name('view_profile');
Route::get('/edit_profile/{id}', [Controllers\AdminController::class, 'edit'])->name('edit_profile');
Route::post('/updateProfile/{id}',[Controllers\AdminController::class, 'updateProfile'])->name('updateProfile');
Route::post('/deactivate_profile', [Controllers\auth\LoginController::class, 'deactivate_profile'])->name('deactivate_profile');
Route::get('/deactivate', [Controllers\auth\LoginController::class, 'deactivate'])->name('deactivate');




