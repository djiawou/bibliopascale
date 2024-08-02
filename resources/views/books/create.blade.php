@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Ajouter un Livre</h1>
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="author">Auteur</label>
                    <select class="form-control" name="author_id" required id="author_id">
                        <option value="option_select" disabled selected>Sélectionner l'auteur</option>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="isbn">Année de Publication</label>
                    <input type="number" name="published_year" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter Livre</button>
            </form>
        </div>
    </div>
</div>
@endsection
