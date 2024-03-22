@extends('layouts.base')
@section('content')
<div class="container">
    <h1 class="center-heading"> Books</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Book Title</th>
            <th scope="col">Author</th>

          </tr>
        </thead>
        <tbody>
            @forelse ($books as $key=>$item )
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->author->name}}</td>

              </tr>
              @empty
              <tr><td class="text-center" colspan="2"> records empty</td></tr>
            @endforelse


        </tbody>
      </table>
</div>
<a href="/author/create">Author form</a>
<a href="/author">Authors list</a>
<a href="/book/create">Create book</a>
<a href="/book">Books list</a>

@endsection
