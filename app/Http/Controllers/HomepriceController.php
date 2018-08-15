<?php

namespace App\Http\Controllers;

use App\Homeprice;
use Illuminate\Http\Request;
use App\Homestay;
use App\Price;

class HomepriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeprices = Homeprice::all();
        return view('homeprices.index',compact('homeprices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homestays = Homestay::all();
        $prices = Price::all();
        // dd($homestays);
        // dd($prices);
        return view('homeprices.create',compact('homestays','prices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homeprice = new Homeprice;
        $homeprice->homestay_name = $request->homestay_name;
        $homeprice->homestay_price = $request->homestay_price;
    
        $homeprice->save();
        return redirect()->route('homeprices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homeprice  $homeprice
     * @return \Illuminate\Http\Response
     */
    public function show(Homeprice $homeprice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homeprice  $homeprice
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeprice $homeprice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homeprice  $homeprice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeprice $homeprice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homeprice  $homeprice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeprice $homeprice)
    {
        //
    }
}
