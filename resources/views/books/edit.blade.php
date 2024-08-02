@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Modifier Livre</h1>
            <form action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" class="form-control" required value="{{ $book->title }}">
                </div>
                <div class="form-group">
                    <label for="author_id">Auteur</label>
                    <select class="form-control" name="author_id" required id="author_id">
                        <option value="option_select" disabled selected>Sélectionner l'auteur</option>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}" {{$book->author_id == $author->id  ? 'selected' : ''}}>{{ $author->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn" class="form-control" required value="{{ $book->isbn }}">
                </div>

                <div class="form-group">
                    <label for="isbn">Année de Publication</label>
                    <input type="number" name="published_year" class="form-control" required value="{{ $book->published_year }}">
                </div>
                <button type="submit" class="btn btn-primary">Modifier Livre</button>
            </form>
        </div>
    </div>
</div>
@endsection
