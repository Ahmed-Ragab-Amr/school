<?php

use App\Livewire\StudentSearch;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;


Route::get('login' , [UserController::class , 'ShowLogin'])->name('admin.ShowLogin');
Route::post('admin/login' , [UserController::class , 'login'])->name('admin.login');


Route::middleware(['auth' , 'admin'])->group(function (){

    Route::get('/home' , function (){
        return view('admin.Home');
    })->name('admin.home');


    Route::post('student/import' , [UserController::class , 'importStudent'])->name('student.import');
    Route::post('teacher/import' , [UserController::class , 'importteacher'])->name('teacher.import');

    Route::get('user/create' , [UserController::class , 'create'])->name('user.create');
    Route::post('user/store' , [UserController::class , 'store'])->name('user.store');
    Route::get('/{user}' , [UserController::class , 'show'])->name('users.show');
    Route::delete('user/delete/{id}' , [UserController::class , 'delete'])->name('user.delete');
    Route::get('user/edit/{id}' , [UserController::class , 'edit'])->name('user.edit');
    Route::put('user/update/{id}' , [UserController::class , 'update'])->name('user.update');
    Route::get('/search', StudentSearch::class);


});
Route::get('profile/{id}' , [UserController::class , 'showProfile'])->name('profile.user');
