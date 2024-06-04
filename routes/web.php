<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CatagoryController; // Corrected namespace
use App\Http\Controllers\Admin\AdminDashbordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider, and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/admin/category', [CatagoryController::class, 'index'])->name('admin.category.category');
    Route::get('/admin/addcategory', [CatagoryController::class, 'create'])->name('admin.category.addcategory');
    Route::Post('/admin/addcategory', [CatagoryController::class, 'store']);
    Route::get('/admin/edit/{id}',[CatagoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/admin/update/{id}',[CatagoryController::class, 'update']);
    Route::get('/admin/destroy/{id}',[CatagoryController::class, 'destroy']);
    Route::get('/admin/publish',[CatagoryController::class, 'approval'])->name('admin.category.category-publish');
    Route::get('/admin/publisg_catagory/{id}',[CatagoryController::class, 'publish']);
    Route::get('/admin/not_publisg_catagory/{id}',[CatagoryController::class, 'hide']);
    
    
    // BlogPost
    Route::get('/admin/posts', [BlogPostController::class, 'show'])->name('admin.blogPost.posts');
    Route::get('/admin/addpost', [BlogPostController::class, 'create'])->name('admin.blogPost.addPost');
    Route::post('/admin/addpost', [BlogPostController::class, 'submit']);
    Route::post('/admin/upload', [BlogPostController::class, 'upload'])->name('admin.blogPost.upload');
    Route::get('/admin/editPost/{id}', [BlogPostController::class, 'edit'])->name('admin.blogPost.editPost');
    Route::put('/admin/updatepost/{id}', [BlogPostController::class, 'update']);
    Route::get('/admin/destroypost/{id}', [BlogPostController::class, 'destroy']);
    Route::get('/admin/post-publish', [BlogPostController::class, 'approval'])->name('admin.blogPost.publish-post');
    Route::get('/admin/publish_post/{id}', [BlogPostController::class, 'publish']);
    Route::get('/admin/not_publish_post/{id}', [BlogPostController::class, 'hide']);
    
    Route::get('/admin/delet_commend/{id}', [AdminDashbordController::class, 'deletCommend']);
    Route::get('/dashbord/catagory', [AdminDashbordController::class, 'catagory']);

});

// Admin Routes
Route::get('dashboard', [AdminDashbordController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
