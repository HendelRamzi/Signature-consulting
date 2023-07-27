<?php

use App\Models\Realisation;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('image')->group(function (){
    Route::get('/load/service/{images}', function($image){
        // dd($image); 
        $headers = [
            "Content-Disposition" => "inline"
        ];

        return Storage::download('/services//'.$image, $image, $headers);
    })->name('image.load');




    Route::get('/load/realisations/thumb/{image}', function($image){
        $headers = [
            "Content-Disposition" => "inline"
        ];
        return Storage::download('/realisations//'.$image, $image, $headers);
    });


    Route::get('/load/gallery/{image}', function($image){
        $headers = [
            "Content-Disposition" => "inline"
        ];
        return Storage::download('/gallery//'.$image, $image, $headers);
    });

});

Route::prefix('realisation')->group(function () {
    
    /**
     * * Realisation list
     */
    Route::get('/', function(){
        return view("admin.realisation.index");
    })->name('admin.realisation.index'); 

    /**
     * * Realisation Creation
     */
    Route::get('/creation', function(){
        return view('admin.realisation.create'); 
    })->name('admin.realisation.create');

    /**
     * * Realisation Details
     */
    Route::get('/{name}', function($name){
        $rea = Realisation::where('name', $name)->first(); 
        return view('admin.realisation.details', [
            'rea' => $rea
        ]);
    })->name('admin.realisation.details'); 


    /**
     * * Realisation edit
     */
    Route::get('/edit/{name}', function($name){
        $rea = Realisation::where('name', $name)->first(); 
        return view('admin.realisation.edit', [
            'rea' => $rea
        ]);
    })->name('admin.realisation.edit');

});

Route::prefix('service')->group(function(){
    /**
     * * Service list
     */
    Route::get('/', function(){
        return view('admin.services.index');
    })->name('admin.services.index');

    /**
     * * Service creation
     */
    Route::get('/creation', function(){
        return view('admin.services.create');
    })->name('admin.services.create');

    /**
     * * Service details
     */
    Route::get('/{name}', function($name){
        $service = Service::where('name', $name)->first(); 
        return view('admin.services.details', [
            'service' => $service
        ]);
    })->name('admin.services.details'); 

    /**
     * * Service edit
     */
    Route::get('/edit/{name}', function($name){
        $service = Service::where('name', $name)->first(); 
        return view('admin.services.edit', [
            'service' => $service
        ]);
    })->name('admin.services.edit');

});


Route::prefix('contact')->group(function(){
    /**
     * * Service list
     */
    Route::get('/', function(){
        return view('admin.contact.index');
    })->name('admin.contact.index');

});