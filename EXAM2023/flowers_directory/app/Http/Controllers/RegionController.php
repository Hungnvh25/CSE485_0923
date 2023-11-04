<?php

namespace App\Http\Controllers;

use App\Models\region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $region = region::paginate(10);
        return view("region.home", compact("region"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('region.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'flower_id'=>'required',
            'region_name'=>'required',
         ]);
 
         region::create($request->all());
 
         return redirect()->route('region.index')->with('success','Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(region $region)
    {
        return view('region.Edit',compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, region $region)
    {
        $request->validate([
            'flower_id'=>'required',
            'region_name'=>'required',

         ]);
        $region->update($request->all());
        return redirect()->route('region.index')->with('success','Author update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(region $region)
    {
        $region->delete();
        return redirect()->route('region.index')->with("success","Author destroy successfully");
    }
}
