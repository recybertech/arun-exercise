@extends('layouts.base')
@section('custom-style')
<style>
    /* Center align the heading */
    .center-heading {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
    }

    /* Center align the form */
    .center-form {
        display: flex;
        justify-content: center;
    }
</style>
@endsection
@section('content')
<div class="container">
    <h1 class="center-heading">Add Book</h1>
    <form action="/book" id="booksform" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="form-group">
                    <label for="authors_id" class="sr-only">Select Author</label>
                    <select  class="form-control" id="authors_id" name="authors_id" >
                        <option value="">Select</option>
                        @foreach ($authors as $author)
                            <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach

                    </select>
                    @error('authors_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="title" class="sr-only">Book title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Book title" >
                    @error('title')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-2 d-flex align-items-end justify-content-end"> <!-- Modified this part -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- <a href="/author">view Authors</a> --}}
<a href="/author/create">Author form</a>
<a href="/author">Authors list</a>
<a href="/book/create">Create book</a>
<a href="/book">Books list</a>
@endsection
