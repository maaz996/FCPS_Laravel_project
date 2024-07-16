<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Models\Member;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Auth\Events\Login;

 Route::get('/welcome', function () {
    return view('welcome');
 });


Route::view('add', 'addmember');

Route::get('/thank', function () {
    return view('thank');
})->name('thank');

Route::post('add',[MemberController::class,'showOption']);
Route::post('add',[MemberController::class,'showRadio']);
Route::post('/add',[MemberController::class,'addData'])->name('add');

Route::get('/member', function() {
    $members = Member::all();
});
Route::get('/list',[MemberController::class,'demo']);

Route::get('/delete/{id}',[MemberController::class,'remove']);
Route::get('/edit/{id}',[MemberController::class,'edit']);

Route::view('/edit', 'edit');

Route::post('edit', [MemberController::class, 'update']);

// Route::get('users-pdf/{id}', [MemberController::class, 'print']);

// Route::post('users-pdf', [MemberController::class, 'update']);

// Route::view('/users-pdf', 'users-pdf');

Route::get('/generate-pdf/{id}', [MemberController::class, 'generatePdf']);

Route::get('login', [MemberController::class, 'index'])->name('login');
Route::get('register', [MemberController::class, 'register_view'])->name('register');

Route::post('login', [MemberController::class, 'login'])->name('login');
Route::post('register', [MemberController::class, 'register'])->name('register');

Route::get('logout', [MemberController::class, 'logout'])->name('logout');

Route::get('send-mail', [MemberController::class, 'emailfunction'])->name('send-mail');
