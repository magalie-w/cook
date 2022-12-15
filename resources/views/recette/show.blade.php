@extends('layouts.base')

@section('title')
    {{ $recette->titre }} - @parent
@endsection

@section('content')
    <div>
        <h1>{{ $recette->titre }}</h1>

        @foreach ($recette->ingredients as $ingredient)
            <div>
                {{ $ingredient->pivot->quantite }}
                {{ $ingredient->pivot->type }}
                {{ $ingredient->nom }}
            </div>
        @endforeach
    </div>
@endsection