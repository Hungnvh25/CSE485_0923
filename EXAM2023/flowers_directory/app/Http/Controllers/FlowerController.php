<?php

namespace App\Http\Controllers;

use App\Models\flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        $flower = Flower::where('name', 'like', "%$query%")
                        ->orWhere('description', 'like', "%$query%")
                        ->orderBy('updated_at', 'desc')->paginate(10);
        return view("flower.home", compact("flower"));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flower.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image_url'=>'required',
            'created_at',
            'updated_at',
         ]);
 
         flower::create($request->all());
 
         return redirect()->route('flower.index')->with('success','Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(flower $flower)



    public function show(Flower $flower)
    {
        $regions = $flower->region;
        return view('flower.show', compact('flower', 'regions'));
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(flower $flower)
    {
        return view('flower.Edit',compact('flower'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, flower $flower)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image_url'=>'required',
            'created_at',
            'updated_at',

         ]);
        $flower->update($request->all());
        return redirect()->route('flower.index')->with('success','Author update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(flower $flower)
    {
        $flower->delete();
        return redirect()->route('flower.index')->with("success","Author destroy successfully");
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $flowers = Flower::where('name', 'like', "%$query%")
                        ->orWhere('description', 'like', "%$query%")
                        ->get();
    
        return view('flower.show', compact('flowers', 'query'));
    }
    

}
