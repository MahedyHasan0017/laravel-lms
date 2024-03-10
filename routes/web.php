<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\AdminController ;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\RegularUserController ; 




// Admin routes wil be here 

Route::prefix('admin')->group(function(){
    
    // authentication related routes 

    Route::get('/login',[AdminController::class,'index'])->name('admin_login_form');
    Route::post('/login/owner',[AdminController::class,'login'])->name('admin_login'); // admin_profile
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin_dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin_logout');
    Route::get('/register',[AdminController::class,'register_view'])->name('admin_register_form');
    Route::post('/register/owner',[AdminController::class,'register'])->name('admin.register'); 


    // users related routes 

    Route::get('/users',[AdminUserController::class,'users_list'])->name('admin_users')->middleware('admin') ; 
    // Route::get('/user-info/{whatsapp}',[AdminUserController::class,'show'])->name('user_info');
    Route::get('/user-info/${id}',[AdminUserController::class,'user_info'])->name('user_info');

    
});

// Admin routes end here 




// regular_user routes wil be here 

Route::prefix('regular_user')->group(function(){
    
    Route::get('/login',[RegularUserController::class,'index'])->name('regular_user_login_form');
    Route::post('/login/owner',[RegularUserController::class,'login'])->name('regular_user_login'); // admin_profile
    Route::get('/dashboard',[RegularUserController::class,'dashboard'])->name('regular_user_dashboard')->middleware('regular_user');
    Route::get('/logout',[RegularUserController::class,'logout'])->name('regular_user_logout');

    Route::get('/register',[RegularUserController::class,'register_view'])->name('regular_user_register_form');
    Route::post('/register/owner',[RegularUserController::class,'register'])->name('regular_user_register'); 

    Route::get('/profile',[RegularUserController::class,'profile'])->name('regular_user_profile');
          
});

// regular_user routes end here 



Route::get('/', function () {
    return view('frontend/home/index');
});
Route::get('users/data', [RegularUserController::class, 'data'])->name('users_data');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
