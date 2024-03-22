<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Authors::all('id','name');
        return view('authors.author_list',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.author_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required'
            ]);

            Authors::create($data);

            return redirect()->back()->with('success', 'Author created successfully');
        } catch (QueryException $e) {

            return redirect()->back()->with('error','something went wrong try again later');
        }
    }

    /**
     * Display the specified resource.
     */
    // public function show(Authors $author)
    // {

    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Authors $authors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Authors $authors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Authors $authors)
    {
        //
    }
}
