<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\CeritaUmkmController;
use App\Http\Controllers\OrganizingController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\CollaborationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

// $this->urlAdmin = "admin";

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('aboutPage');
})->name('about');

Route::get('/program', function () {
    return view('programPage');
});

Route::get('/schedule', function () {
    return view('schedulePage');
})->name('schedule');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog:id}', [BlogController::class, 'read'])->name('blog.read');
Route::get('/cerita-umkm', [CeritaUmkmController::class, 'index'])->name('cerita-umkm');
Route::get('/cerita-umkm/{blog:id}', [CeritaUmkmController::class, 'read'])->name('cerita-umkm-read');
Route::get('/assesment-center', [AssesmentController::class, 'index'])->name('assesment-center');
Route::get('/assesment-center-detail', [AssesmentController::class, 'detailAssesmentPage'])->name('assesment-center.detail');
Route::get('/organizing', [OrganizingController::class, 'index'])->name('organizing');
Route::get('/internship', [InternshipController::class, 'index'])->name('internship');
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');
Route::get('/training', [TrainingController::class, 'trainingPage'])->name('training');
Route::get('/training-detail', [TrainingController::class, 'trainingDetailPage'])->name('training.detail');
Route::get('/consulting', [ConsultingController::class, 'index'])->name('consulting');
Route::get('/collaboration', [CollaborationController::class, 'index'])->name('collaboration');
Route::get('/csr', function () {
    return view('csrPage');
})->name('csr');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::prefix('blog')->group(function () {
        Route::get('/', [BlogController::class, 'adminBlog'])->name('admin.blog');
        Route::get('/create', [BlogController::class, 'createBlogPage'])->name('admin.blog.create.page');
        Route::post('/create', [BlogController::class, 'createBlog'])->name('admin.blog.create');
        Route::get('/edit/{id}', [BlogController::class, 'editBlogPage'])->name('admin.blog.edit.page');
        Route::put('/edit/{id}', [BlogController::class, 'editBlog'])->name('edit');
        Route::delete('/delete/{id}', [BlogController::class, 'deleteBlog'])->name('admin.blog.delete');
    });

    Route::prefix('training')->group(function () {
        Route::get('/', [TrainingController::class, 'adminTraining'])->name('admin.training');
        Route::get('/create', [TrainingController::class, 'createTrainingPage'])->name('admin.training.create.page');
        Route::post('/create', [TrainingController::class, 'createTraining'])->name('admin.training.create');
        Route::get('/edit/{id}', [TrainingController::class, 'editTrainingPage'])->name('admin.training.edit.page');
        Route::put('/edit/{id}', [TrainingController::class, 'editTraining'])->name('admin.training.edit');
        Route::delete('/delete/{id}', [TrainingController::class, 'deleteTraining'])->name('admin.training.delete');

        Route::prefix('category')->group(function() {
            Route::get('/', [TrainingController::class, 'adminCategoryTraining'])->name('admin.training.category');
            Route::get('/create', [TrainingController::class, 'createCategoryPage'])->name('admin.training.category.create');
            Route::post('/create', [TrainingController::class, 'storeCategory'])->name('admin.training.category.store');
            Route::get('/edit/{id}', [TrainingController::class, 'editCategoryPage'])->name('admin.training.category.edit');
            Route::put('/edit/{id}', [TrainingController::class, 'updateCategory'])->name('admin.training.category.update');
            Route::get('/delete/{id}', [TrainingController::class, 'deleteCategory'])->name('admin.training.category.delete');
        });
        
    });

    Route::prefix('assesment')->group(function () {
        Route::get('/', [AssesmentController::class, 'adminAssesment'])->name('admin.assesment');
        Route::get('/create', [AssesmentController::class, 'createAssesmentPage'])->name('admin.assesment.create.page');
        Route::post('/create', [AssesmentController::class, 'createAssesment'])->name('admin.assesment.create');
        Route::get('/edit/{id}', [AssesmentController::class, 'editAssesmentPage'])->name('admin.assesment.edit.page');
        Route::put('/edit/{id}', [AssesmentController::class, 'editAssesment'])->name('admin.assesment.edit');
        Route::get('/syarat/{id}', [AssesmentController::class, 'syaratAssesmentPage'])->name('admin.assesment.syarat.page');
        Route::post('/syarat/{id}', [AssesmentController::class, 'syaratAssesment'])->name('admin.assesment.syarat');
        Route::get('/uk/{id}', [AssesmentController::class, 'ukAssesmentPage'])->name('admin.assesment.uk.page');
        Route::post('/uk/{id}', [AssesmentController::class, 'ukAssesment'])->name('admin.assesment.uk');
        Route::delete('/delete/{id}', [AssesmentController::class, 'deleteAssesment'])->name('admin.assesment.delete');
        Route::delete('/delete/{id}', [AssesmentController::class, 'deleteSyaratAssesment'])->name('admin.assesment.deleteSyarat');
    });

    Route::prefix('umkm_story')->group(function () {
        Route::get('/', [CeritaUmkmController::class, 'adminCeritaUmkm'])->name('admin.umkm_story');
        Route::get('/create', [CeritaUmkmController::class, 'createCeritaUmkmPage'])->name('admin.umkm_story.create.page');
        Route::post('/create', [CeritaUmkmController::class, 'createCeritaUmkm'])->name('admin.umkm_story.create');
        Route::get('/edit/{id}', [CeritaUmkmController::class, 'editCeritaUmkmPage'])->name('admin.umkm_story.edit.page');
        Route::put('/edit/{id}', [CeritaUmkmController::class, 'editCeritaUmkm'])->name('admin.umkm_story.edit');
        Route::delete('/delete/{id}', [CeritaUmkmController::class, 'deleteCeritaUmkm'])->name('admin.umkm_story.delete');
    });
});
// });

    // Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
