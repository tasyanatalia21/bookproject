<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors=Author::latest()->get();
        return view('Authors.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Authors.create');
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
        Author::create([
            'name' => $request->name
        ]);
        return redirect()->route('authors.index');
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
        $author=Author::findOrFail($id);
        return view('authors.edit',compact('author'));
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
        $author=Author::findOrFail($id);
        // update ke database
        $author->update([
        'name' => $request->name
    ]);

    return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // cari yg mau di delete
         $author=Author::findOrFail($id);

         // delete row data dalam database
         $author->delete();

         return redirect()->route('authors.index');
    }
}
