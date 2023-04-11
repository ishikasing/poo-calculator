<?php
use Illuminate\Support\Facades\Route;

Route::get('calculator', function(){
    echo "Hello  calculater packages";
});

Route::get('add/{a}/{b}',[poo\calculator\CalContoller::class,'add']);
Route::get('sub/{a}/{b}',[poo\calculator\CalContoller::class,'sub']);

Route::get('log',[poo\calculator\CalContoller::class,'log']);
Route::post('show',[poo\calculator\CalContoller::class,'show']);
