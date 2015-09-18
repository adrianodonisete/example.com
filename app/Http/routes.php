<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

// about
Route::get('about', function() {
    return view('about')->with('number_of_cats', 9000);
});

// inicio
Route::get('/', function() {
    return redirect('cats');
});

//Route::get('/', function() {
//    return 'All cats bastard';
//});
// cats

Route::get('cats/{id}', function($id) {
    $cat = Furbook\Cat::find($id);
    //var_dump($cats);
//    echo '<pre>';
//    echo print_r($cat, true);
//    echo '</pre>';
    //return 'All cats bastard';
    return view('cats.show')->with('cat', $cat);
});

//Route::get('cats/{cat}', function(Furbook\Cat $cat) {
//    return view('cats.show')->with('cat', $cat);
//});

Route::get('cats', function() {
    $cats = Furbook\Cat::all();
//    echo '<pre>';
//    var_dump($cats);
//    echo print_r($cats, true);
//    echo '</pre>';
//    return 'All cats bastard';
    return view('cats.index')->with('cats', $cats);
});

Route::get('cats/breeds/{name}', function($name) {
    $breed = Furbook\Breed::with('cats')
            ->whereName($name)
            ->first();
    return view('cats.index')
                    ->with('breed', $breed)
                    ->with('cats', $breed->cats);
});

Route::get('cats/{cat}', function(Furbook\Cat $cat) {
    return view('cats.show')->with('cat', $cat);
});

//Route::get('cats', function() {
//    return 'All cats';
//});
//
//Route::get('cats/{id}', function($id) {
//    sprintf('Cat #%d', $id);
//})->where('id', '[0-9]+');
