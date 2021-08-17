<?php

use App\Http\Controllers\AdminController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\UserController;


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

Route::get('/registration',function()
{
    return view('auth.register');
});

Route::post('/register',[UserController::class,'register'])->name('register');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', [UserController::class,'profile'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/edit', [UserController::class,'edit'])->name('editProfile');
Route::middleware(['auth:sanctum', 'verified'])->post('/basic', [UserController::class,'basic'])->name('basicInfo');
Route::middleware(['auth:sanctum', 'verified'])->post('/blood', [UserController::class,'blood'])->name('bloodInfo');

Route::prefix('admin')->name('admin.')->group(function()
{
    // Admin Auth Start

    // Don't Change The Code Without Asking


    $enableViews = config('fortify.views', true);
    Route::view('/login','auth.adminlogin')->middleware('guest:admin')->name('login');
    $limiter = config('fortify.limiters.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:admin',
            $limiter ? 'throttle:'.$limiter : null,
        ]))->name('login');
    Route::view('/dashboard','admin.dashboard')->middleware('auth:admin')->name('home');

    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:admin')
        ->name('logout');

    // Admin Auth End  

    Route::get('/all_member',function()
    {
        return view('admin.all_member');
    })->name('allMember')->middleware('auth:admin');

    Route::get('/students/list', [AdminController::class, 'getUsers'])->name('users.list')->middleware('auth:admin');
    
    Route::get('/all_admin',function()
    {
        $admins= Admin::all();
        return view('admin.all_admin',compact('admins'));
    })->name('allAdmins')->middleware('auth:admin');

    Route::get('/delete_admins/{id}', [AdminController::class, 'deleteAdmin'])->name('admins.delete')->middleware('auth:admin');
    Route::get('/add_admins', function()
    {
        return view('admin.add_admin');
    })->name('addAdmins')->middleware('auth:admin');
    Route::post('/store_admins',[AdminController::class,'storeAdmin'])->name('store_admin')->middleware('auth:admin');
    
});

Route::view('/all','admin.dashboard');