<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seri;
use App\Models\Author;

class SeriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seris=Seri::latest()->get();

        foreach($seris as $seri){
            echo $seri->author->name;
        }

        return view('Seris.index',compact('seris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();

        return view('Seris.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation form
        // dd($request);
        $this->validate($request,[
            'author_id' => 'required',
            'title' => 'required|min:3'
        ]);

        // create ke database
        Seri::create([
            'author_id' => $request->author_id,
            'title' => $request->title
        ]);

        return redirect()->route('Seris.index');

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

        $authors=Author::latest()->get();

        $seris=Seri::findOrFail($id);
        return view('seris.edit',compact('seris','authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi
        $this->validate($request,[
            'author_id' => 'required',
            'title' => 'required|min:3'
        ]);

        // cari yg mau di edit
        $seri=Seri::findOrFail($id);
        // update ke database

        $seri->update([
        'author_id' => $request->author_id,
        'title' => $request->title
        ]);

    return redirect()->route('Seris.index');
    }

    // [ 'images' => $images]

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // cari yg mau di delete
        $seri=Seri::findOrFail($id);

        // delete row data dalam database
        $seri->delete();

        return redirect()->route('Seris.index');

    }
}
