<?php

namespace App\Http\Controllers;

use App\Homestay;
use Illuminate\Http\Request;
use App\Province;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homestays = Homestay::all();
        // dd($homestays);
        return view('homestays.index',compact('homestays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        // dd($provinces);
        return view('homestays.create',compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homestay = new Homestay;
        $homestay->name = $request->name;
        $homestay->price = $request->price;
        $homestay->activity = $request->activity;
        $homestay->nearby = $request->nearby;
        $homestay->nametel = $request->nametel;
        $homestay->tel = $request->tel;
        $homestay->email = $request->email;
        $homestay->website = $request->website;
        
        if($request->exists('image1'))
        {
            $file = $request->file('image1');
            $path = 'images/homestays/';
            $filename = $file->getClientOriginalName();         
            $homestay->image1 = $filename;
            $file->move('images/homestays/',$file->getClientOriginalName());
            
        }
        if($request->exists('image2'))
        {
            $file = $request->file('image2');
            $path = 'images/homestays/';
            $filename = $file->getClientOriginalName();         
            $homestay->image2 = $filename;
            $file->move('images/homestays/',$file->getClientOriginalName());
            
        }
        
        // dd($request->all());
         
        $homestay->save();
        return redirect()->route('homestays.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function show(Homestay $homestay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function edit(Homestay $homestay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homestay $homestay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homestay $homestay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homestay $homestay)
    {
        //
    }
}
