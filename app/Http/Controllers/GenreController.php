<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres=Genre::latest()->get();
        return view('genre.index',compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // validation form
         $this->validate($request,[
            'name' => 'required|min:3'
        ]);

        // create ke database
        Genre::create([
            'name' => $request->name
        ]);

        return redirect()->route('genres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre=Genre::findOrFail($id);
        return view('genre.edit',compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi
        $this->validate($request,[
            'name' => 'required|min:3'
        ]);

        // cari yg mau di edit
        $genre=Genre::findOrFail($id);
        // update ke database
        $genre->update([
        'name' => $request->name
        ]);
        return redirect()->route('genres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // cari yg mau di delete
         $genre=Genre::findOrFail($id);

         // delete row data dalam database
         $genre->delete();

         return redirect()->route('genres.index');
    }
}
