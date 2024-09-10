<?php

use App\Livewire\Page;
use Illuminate\Support\Facades\Route;

Route::get('/', Page::class)->name('page');
Route::get('/{page:slug?}', Page::class)->name('page.slug');

Route::get('/leads', function () {
    dump('wip');
})->name('lead');
