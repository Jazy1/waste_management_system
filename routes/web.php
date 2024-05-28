<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/playground', function () {
    return view('playground');
});

Route::prefix("admin")->group(function(){

    Route::get('dashboard', function () { return view('admin.dashboard'); })->name("admin.dashboard");

    Route::get('profile', function () { return view('admin.profile'); })->name("admin.profile");
    
    Route::prefix("users")->group(function(){
        Route::get('/', function () { return view('admin.users.index'); })->name("admin.users.index");
        Route::get('account', function () { return view('admin.users.account'); })->name("admin.users.account");
    });
    
    Route::prefix("collectors")->group(function(){
        Route::get('/', function () { return view('admin.collectors.index'); })->name("admin.collectors.index");
        Route::get('account', function () { return view('admin.collectors.account'); })->name("admin.collectors.account");
    });
    
    Route::prefix("finances")->group(function(){
        Route::get("/", function () { return view('admin.finances.dashboard'); })->name("admin.finances.index");

        Route::get("deposit", function () { return view('admin.finances.deposit'); })->name("admin.finances.deposit");

        Route::get("withdraw", function () { return view('admin.finances.withdraw'); })->name("admin.finances.withdraw");
    });

});

Route::prefix("user")->group(function(){

    Route::get('dashboard', function () { return view('user.dashboard'); })->name("user.dashboard");

    Route::get('profile', function () { return view('user.profile'); })->name("user.profile");
    
    // Route::prefix("users")->group(function(){
    //     Route::get('/', function () { return view('admin.users.index'); })->name("admin.users.index");
    //     Route::get('account', function () { return view('admin.users.account'); })->name("admin.users.account");
    // });
    
    // Route::prefix("collectors")->group(function(){
    //     Route::get('/', function () { return view('admin.collectors.index'); })->name("admin.collectors.index");
    //     Route::get('account', function () { return view('admin.collectors.account'); })->name("admin.collectors.account");
    // });

    Route::prefix("scraps")->group(function(){
        Route::get('/', function () { return view('user.scraps.dashboard'); })->name('users.scraps.index');
        Route::get('create', function () { return view('user.scraps.create'); })->name('users.scraps.create');
        Route::get('edit', function () { return view('user.scraps.edit'); })->name('users.scraps.edit');
        // Route::get('{gig}/edit', [GigController::class, 'edit'])->name('freelancers.gigs.edit');
        // Route::put('{gig}', [GigController::class, 'update'])->name('freelancers.gigs.update');            
        // Route::delete('{gig}', [GigController::class, 'destroy'])->name('freelancers.gigs.destroy');
        // Route::put('{gig}/update-status', [GigController::class, 'updateStatus'])->name("freelancers.gigs.updateStatus");
    });
    
    Route::prefix("finances")->group(function(){
        Route::get("/", function () { return view('user.finances.dashboard'); })->name("user.finances.index");
        Route::get("deposit", function () { return view('user.finances.deposit'); })->name("user.finances.deposit");
        Route::get("withdraw", function () { return view('user.finances.withdraw'); })->name("user.finances.withdraw");
    });

});

Route::prefix("collectors")->group(function(){

});

Route::get('soda', function () { return view('welcome'); })->name("soda");
