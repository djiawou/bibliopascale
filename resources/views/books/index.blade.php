@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Books</h1>
            <a href="{{ route('books.create') }}" class="btn btn-primary">Ajouter Livre</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered mt-2">
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>ISBN</th>
                    <th>Année de Publication</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Afficher</a>
                            <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Modifier</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
