<?php

use App\Http\Controllers\ArticleController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvatarsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UtilisateurController;

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

Route::get('/dashboard', function () {
    $user = User::all();
    return view('dashboard',compact('user'));
})->middleware(['auth'])->name('dashboard');

//profile
Route::get('/{id}/edit',[RegisteredUserController::class,'edit'])->name('edit')->middleware(['auth']);
Route::put('/{id}/update',[RegisteredUserController::class,'update'])->name('update')->middleware(['auth']);

//avatar
Route::get('/avatar',[AvatarsController::class,'index'])->name('avatar')->middleware(['auth']);
Route::get('/AvatarCreate',[AvatarsController::class,'create'])->name('newAvatar')->middleware(['auth']);
Route::post('/create',[AvatarsController::class,'store']);
Route::delete('/delete/{id}',[AvatarsController::class,'destroy']);

//catégorie
Route::get('/createCategorie',[CategorieController::class,'create'])->name('categorie')->middleware(['auth']);
Route::post('/storeCategorie',[CategorieController::class,'store']);
Route::get('{id}/editCategorie',[CategorieController::class,'edit'])->name('editCate');
Route::put('/{id}/updateCategorie',[CategorieController::class,'update'])->name('updateCate')->middleware(['auth']);
Route::delete('/deleteCategorie/{id}',[CategorieController::class,'destroy']);

//utilisateur
Route::get('/allUsers', function () {
    $user = User::all();
    return view('pages.utilisateur.index',compact('user'));
})->middleware(['auth'])->name('utilisateur');
Route::get('/{id}/editUtilisateur',[UtilisateurController::class,'edit'])->name('editUtilisateur')->middleware(['auth']);
Route::put('/{id}/updateUtilisateur',[UtilisateurController::class,'update'])->name('updateUtilisateur')->middleware(['auth']);
Route::delete('/deleteUtilisateur/{id}',[UtilisateurController::class,'destroy'])->middleware(['auth']);


//photo
Route::get('/picture',[ImageController::class,'index'])->name('image')->middleware(['auth']);
Route::post('/storeImage',[ImageController::class,'store'])->middleware(['auth']);
Route::delete('/deleteImage/{id}',[ImageController::class,'destroy']);

//article
Route::get('/article',[ArticleController::class,'index'])->name('article')->middleware(['auth']);
Route::post('/createArticle',[ArticleController::class,'store'])->name('createArticle')->middleware(['auth']);
Route::get('/{id}/editArticle',[ArticleController::class,'edit'])->name('editArticle')->middleware(['auth']);
Route::put('/{id}/updateArticle',[ArticleController::class,'update'])->middleware(['auth']);
Route::delete('/deleteArticle/{id}',[ArticleController::class,'destroy'])->middleware(['auth']);

//galerie
Route::get('galerie',[ImageController::class,'create'])->name('galerie')->middleware(['auth']);
Route::get('/download/{id}',[ImageController::class,'download'])->middleware(['auth']);


require __DIR__.'/auth.php';
