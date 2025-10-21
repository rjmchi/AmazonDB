<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>"required",
            'link' => "required",
            // 'imagefile'=>'required | mimes:jpg, png, svg, jpeg, gif|max:5048',
            'imagefile'=>'required|image | max:5048'
        ]);

        $newImageName = $request->file('imagefile')->getClientOriginalName();
        // $request->file('imagefile')->storeAs('images',$newImageName, 'public');

        $request->file('imagefile')->move('images', $request->file('imagefile')->getClientOriginalName());

        // $request->imagefile->move(public_path('images'), $newImageName);
        Book::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$newImageName,
            'link'=>$request->link
        ]);

        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
