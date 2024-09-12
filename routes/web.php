<?php

use App\Livewire\Page;
use App\Livewire\Thanks;
use Illuminate\Support\Facades\Route;

Route::get('/', Page::class)->name('welcome');

// go to lead-bedankt view
Route::get('/lead-bedankt', Thanks::class)->name('thanks');

Route::get('/{page:slug?}', Page::class)->name('page.slug');
