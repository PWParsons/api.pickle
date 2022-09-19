<?php

use App\Actions\Collections\CreateCollection;
use App\Actions\Collections\DeleteCollection;
use App\Actions\Collections\GetAllCollections;
use App\Actions\Collections\GetCollection;
use App\Actions\Collections\UpdateCollection;
use Illuminate\Support\Facades\Route;

Route::prefix('collections')->name('collections.')->group(function () {
    Route::get('/', GetAllCollections::class)->name('index');
    Route::post('/', CreateCollection::class)->name('store');
    Route::get('{collection:uuid}', GetCollection::class)->name('show');
    Route::patch('{collection:uuid}', UpdateCollection::class)->name('update');
    Route::delete('{collection:uuid}', DeleteCollection::class)->name('destroy');
});
