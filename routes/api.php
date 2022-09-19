<?php

use App\Actions\Collections\CreateCollection;
use App\Actions\Collections\GetCollection;
use App\Actions\Collections\UpdateCollection;
use Illuminate\Support\Facades\Route;

Route::prefix('collections')->name('collections.')->group(function () {
    Route::post('/', CreateCollection::class)->name('store');
    Route::get('{collection:uuid}', GetCollection::class)->name('show');
    Route::patch('{collection:uuid}', UpdateCollection::class)->name('update');
});
