<?php

namespace Furbook\Http\Controllers;

use Illuminate\Http\Request;
use Furbook\Http\Requests;
use Furbook\Http\Controllers\Controller;
use Furbook\Cat;
use Furbook\Breed;
use Carbon\Carbon;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
//        $v = '<pre>'.print_r($cats, true).'</pre>';        
//        $cat = new \Furbook\Cat();
        //return 'index'.$v;
        
        // todos
        $cats = Cat::all();
        return view('cat.index')->with('cats', $cats);
    }
    
    /**
     * 
        
        // testes
        $v = '';
        
        
//        $users = Cat::where('date_of_birth', '<', Carbon::now()->subYears(21)->date)->all();
//        $v .= '<pre>'.print_r($users, true).'</pre>';
//        $v .= '<pre>'.print_r(Carbon::now()->subYears(21), true).'</pre>';
        
//        $women = Cat::where('id', '>', 0)->take(5)->skip(1)->orderBy('name', 'asc')->get();
//        $v .= '<pre>'.print_r($women, true).'</pre>';
        
//        $cat = Cat::where('id', '=', 1)->where('name', '=', 'Leco 2')->first();
//        $v .= '<pre>'.print_r($cat, true).'</pre>';
        
        $cat = Cat::find(1);
        $v .= '<pre>'.print_r($cat->name, true).'</pre>';  
        
        $cat->name = 'Garfield';
        $cat->save();
        
        $data = [
            'name' => 'Tom',
            'date_of_birth' => '1952-06-19',
            'breed_id' => 2,
            'updated_at' => "NOW()",
            'created_at' => "NOW()",
        ];
        $cat->create($data);
        
        return 'index <br />'.$v.'<br />'.$cat->name.'';
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //   
        $breeds = Breed::all();

        $arrBreeds = array();
        foreach ($breeds as $breed) {
            $arrBreeds[$breed->id] = $breed->name;
        }

    //    echo '<pre>';
    //    echo print_r($breeds, true);
    //    echo '</pre>';
        return view('cat.create')->with('breeds', $arrBreeds);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $v = json_decode($id);
        return "show()".'<pre>'.print_r($v, true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $v = json_decode($id);
        return "edit()".'<pre>'.print_r($v, true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
