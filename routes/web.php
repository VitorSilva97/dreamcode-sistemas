<?php

use Illuminate\Support\Facades\Route;

//Rotas site
use App\Livewire\Site\Index as SiteIndex;

//Rotas painel
use App\Livewire\Panel\Index as PanelIndex;
use App\Livewire\Panel\Customers\Index as PanelCustomersIndex;

Route::get('/', SiteIndex::class)->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/painel', PanelIndex::class)->name('panel.index');
        Route::get('/painel/clientes', PanelCustomersIndex::class)->name('panel.customers.index');
    }
);
