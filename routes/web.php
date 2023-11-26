<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Post\Postcontroller;
use App\Http\Controllers\post\CommentController;
use App\Http\Controllers\User\AdminController;
use App\Http\Controllers\ModeratorController;

Route::get('/',[IndexController::class,'index'])->name('main');

Auth::routes();

Route::group(['prefix'=>'post','middleware'=>['auth']],function(){
    Route::post('/comment',[CommentController::class,'comment'])->name('comment');
    Route::delete('/comment/{comment}/delete',[CommentController::class,'delete'])->name('delete_Comment');
    Route::get('/create',[Postcontroller::class,'Create'])->name('create_post');
    Route::post('/posted',[Postcontroller::class,'store'])->name('store_post');
    Route::get('/{post}',[Postcontroller::class,'show'])->name('single_post')->withoutMiddleware('auth');
    Route::get('/{post}/edit',[Postcontroller::class,'edit'])->name('edit_post');
    Route::put('{post}/update',[Postcontroller::class,'update'])->name('update_post');
    Route::delete('/{post}/delete',[Postcontroller::class,'delete'])->name('delete_post');
});
Route::group(['prefix'=>'user'],function(){
    Route::get('/{user}',[UserController::class,'user_show'])->name('single_user');
    Route::get('/{user}/manage',[UserController::class,'manage'])->name('manage');
});




Route::group(['prefix'=>'moderator','middleware'=>'moderator'],function(){
   Route::get('/',[ModeratorController::class,'index'])->name('moderator_index');
   Route::get('/post',[ModeratorController::class,'posts'])->name('posts_for_moderator');
   Route::put('/{post}/post_status_update',[ModeratorController::class,'change_post_status'])->name('moderator_post_status_change');
   Route::get('/users',[ModeratorController::class,'users'])->name('users_for_moderator');
   Route::put('/{user}/User_status_update',[ModeratorController::class,'change_user_status'])->name('moderator_user_status_change');
});




Route::group(['prefix'=>'admin','middleware'=>'admin.access'],function(){
    Route::get('/',[AdminController::class,'index'])->name('index_admin');
    Route::get('/login',[AdminController::class,'login'])->name('login_admin')->withoutMiddleware('admin.access');
    Route::post('/signin',[AdminController::class,'signin'])->name('admin_login')->withoutMiddleware('admin.access');
    Route::post('/logout',[AdminController::class,'logout'])->name('admin_logout');
    Route::get('/posts',[AdminController::class,'posts'])->name('posts_list');
    Route::put('/{post}/update_post',[AdminController::class,'posts_status_change'])->name('post_status_change');
    Route::delete('/{post}/delete_post',[AdminController::class,'post_delete'])->name('admin_post_delete');
    Route::get('/users',[AdminController::class,'users'])->name('users_list');
    Route::put('/{user}/update_user',[AdminController::class,'status_change'])->name('user_status_change');
    Route::delete('/{user}/delete_user',[AdminController::class,'user_delete'])->name('admin_user_delete');
});
