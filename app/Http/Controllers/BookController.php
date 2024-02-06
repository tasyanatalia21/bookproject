<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Seri;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Book::latest()->get();
        // dd($books);
        // foreach($books as $book){
        //     echo $book->author->name;
        //     echo $book->genre->name;
        //     echo $book->seri->title;
        // }

        return view('book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $authors = Author::all();
        $genres = Genre::all();
        $seris = Seri::all();
        // dd($seris);
        return view('book.create',compact('authors','genres','seris'));
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
            'genre_id' => 'required',
            'seri_id' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'price' => 'required',
            'stock' => 'required',
        ]);


         //upload file
         $image = $request->file('image');
         $image->storeAs('public/books/',$image->hashName());

        // create ke database
        Book::create([
            'author_id' => $request->author_id,
            'genre_id' => $request->genre_id,
            'seri_id' => $request->seri_id,
            'image' => $image->hashName(),
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect()->route('books.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // cari yg mau di delete
        $book=Book::findOrFail($id);

        // delete row data dalam database
        $book->delete();

        return redirect()->route('books.index');
    }
}
