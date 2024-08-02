@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Details du Livre</h1>
            <div class="card">
                <div class="card-header">
                    <h2>Titre: {{ $book->title }}</h2>
                </div>
                <div class="card-body">
                    <p><strong>Auteur:</strong> {{ $book->author->name }}</p>
                    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
                    <p><strong>Année de Publication:</strong> {{ $book->published_year }}</p>
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
