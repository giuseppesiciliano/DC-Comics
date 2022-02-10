<?php

use Illuminate\Support\Facades\Route;

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
    $comics_array = config('comics');

    $data = [
        'comics' => $comics_array,
        'services' => [
            [
                'name' => 'DIGITAL COMICS',
                'thumb' => 'images/buy-comics-digital-comics.png'
            ],
            [
                'name' => 'DC MERCHANDISE',
                'thumb' => 'images/buy-comics-merchandise.png'
            ],
            [
                'name' => 'SUBSCRIPTION',
                'thumb' => 'images/buy-comics-subscriptions.png'
            ],
            [
                'name' => 'COMICS SHOP LOCATOR',
                'thumb' => 'images/buy-comics-shop-locator.png'
            ],
            [
                'name' => 'DC POWER VISA',
                'thumb' => 'images/buy-comics-subscriptions.png'
            ]

        ],
    ];
    
    return view('home', $data);
});