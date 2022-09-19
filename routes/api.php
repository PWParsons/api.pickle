<?php

use App\Actions\Collections\CreateCollection;
use Illuminate\Support\Facades\Route;

Route::post('collections', CreateCollection::class)->name('collections.store');
