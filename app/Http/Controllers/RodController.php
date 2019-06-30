<?php

namespace App\Http\Controllers;

use App\Rod;
use App\Pant;
use Illuminate\Http\Request;

class RodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $rods = Rod :: all(); 
        $pants = Pant :: all();
        return view('index')->with('rods' ,$rods)->with('pants',$pants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

     public function create1()
    {
        return view('create1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rod = new Rod;
        $rod->product_id = $request->product_id;
        $rod->color = $request->color;
        $rod->size = $request->size;
        $rod->prices = $request->prices;
        $rod ->save();

        return redirect()->route('index');
    }
    public function store1(Request $request)
    {
        $pant = new Pant;
        $pant->product_id = $request->product_id;
        $pant->color = $request->color;
        $pant->set = $request->set;
        $pant->type = $request->type;
        $pant->size = $request->size;
        $pant->price = $request->price;
        $pant ->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rod  $rod
     * @return \Illuminate\Http\Response
     */
    public function show(Rod $rod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rod  $rod
     * @return \Illuminate\Http\Response
     */
    public function edit(Rod $rod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rod  $rod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rod $rod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rod  $rod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rod $rod)
    {
        //
    }
}
