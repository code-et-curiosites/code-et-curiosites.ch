<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;

Route::view('/', 'home/index')->name('home.index');

Route::view('/thumbnails/{slug}/{layout}', 'thumbnails/show')->name('thumbnail.show');

// Browsershot::url('https://curiosites.test/thumbnails/bienvenue-sur-la-chaine/layout-1?title=Bienvenue%20sur%20la%20cha%C3%AEne!&subtitle=Code%20&%20curiosit%C3%A9s&content=D%C3%A9di%C3%A9e%20au%20code,%20trucs%20et%20astuces%20et%20%C3%A0%20la%20curiosit%C3%A9')
//     ->windowSize(1280, 720)
//     ->save(storage_path('curiosites.png'));
