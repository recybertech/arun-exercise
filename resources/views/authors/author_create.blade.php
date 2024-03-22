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
    <h1 class="center-heading">Create Author</h1>
    <form action="/author" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="form-group">
                    <label for="authorName" class="sr-only">Author Name</label>
                    <input type="text" class="form-control" id="authorName" name="name" placeholder="Enter author name" >
                    @error('name')
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
<a href="/author/create">Author form</a>
<a href="/author">Authors list</a>
<a href="/book/create">Create book</a>
<a href="/book">Books list</a>
@endsection
