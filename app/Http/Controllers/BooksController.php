<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\Books;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::with('author')->get();
        return view('books.books_list',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $authors = Authors::all('id','name');
       return view('books.books_create',compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
        $data = $request->validate([
            'authors_id' =>'required|exists:authors,id',
            'title' =>'required|max:200|min:2'
        ]);

        Books::create($data);
        return redirect()->back()->with('success','book added successfully');
        } catch (QueryException $e) {

            return redirect()->back()->with('error','something went wrong try again later');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books)
    {
        //
    }
}
