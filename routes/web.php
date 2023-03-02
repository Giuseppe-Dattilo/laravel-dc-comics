<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ComicController;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/characters', [PageController::class, 'characters'])->name('characters');

// Tutte le rotte per gestire la risorsa Comic:
Route::resource ('comics', ComicController::class);

// Rotta lista Comic:
// Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// Rotta per avere la pagina del form Comic:
// Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// Rotta dettaglio Comic:
// Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// Rotta per salvare i dati sul DB di un nuovo Comic:
// Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// Rotta per il form di modifica:
// Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

// Rotta per l'update di un Comic:
// Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

// Rotta per eliminare un Comic:
// Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');

Route::get('/movies', [PageController::class, 'movies'])->name('movies');
Route::get('/tv', [PageController::class, 'tv'])->name('tv');
Route::get('/games', [PageController::class, 'games'])->name('games');
Route::get('/collectibles', [PageController::class, 'collectibles'])->name('collectibles');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
Route::get('/fans', [PageController::class, 'fans'])->name('fans');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
