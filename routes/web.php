<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellsController;
use App\Models\Sel;
use App\Models\Element;
use Database\Seeders\selSeeder;
use App\Http\Controllers\emailController;
use App\Http\Controllers\crudController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('sells', SellsController::class);
Route::get('/download', function () {
     return response()->download(public_path('team.jpg') , 'kimo.jpg');
});

Route::get('oneToMany', function(){
      $sel = Sel::firstOrCreate([
        'name' => 'kimo' ,
        'description' => 'engineering' ,
        'price' => 10000 ,
      ]);

      $element = new Element ;
      $element->type = 'original' ;
      $element->love = 'yes' ;
         $element->sel()->associate($sel)->save();
     
});

Route::resource('sendEmail', emailController::class)->only('create');

Route::resource('crudPage', crudController::class);