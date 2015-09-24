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
Route::resource('cat', 'CatController');



// inicio
Route::get('nada', function() {
    return 'Nada';
});



Route::get('cats/{cat}/delete', function(Furbook\Cat $cat) {
    $cat->delete();
    return redirect('cats')
                    ->withSuccess('Cat has been deleted.');
});

Route::get('cats/create', function() {    
    $breeds = Furbook\Breed::all();
    
    $arrBreeds = array();
    foreach ($breeds as $breed) {
        $arrBreeds[$breed->id] = $breed->name;
    }
    
//    echo '<pre>';
//    echo print_r($breeds, true);
//    echo '</pre>';
    return view('cats.create')->with('breeds', $arrBreeds);
});
Route::post('cats', function() {
    $cat = Furbook\Cat::create(Input::all());
    return redirect('cats/' . $cat->id)
                    ->withSuccess('Cat has been created.');
});



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
    return view('cats.show')->with('cats', $cat);
});


Route::get('cats/{cat}/edit', function(Furbook\Cat $cat) {
    //echo '<pre>', print_r($cat, true), '</pre>';
      
    $breeds = Furbook\Breed::all();
    
    $arrBreeds = array();
    foreach ($breeds as $breed) {
        $arrBreeds[$breed->id] = $breed->name;
    }
    
    return view('cats.edit')->with('cat', $cat)->with('breeds', $arrBreeds);
});
Route::post('cats/{cat}', function(Furbook\Cat $cat) {
    $cat->update(Input::all());
    return redirect('cats/' . $cat->id)
                    ->withSuccess('Cat has been updated.');
});



// user 
Route::get('user/{id}', ['uses' => 'UserController@show']);