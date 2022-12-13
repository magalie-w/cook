@extends('layouts.base')

@section('title')
    Accueil - @parent
@endsection

@section('content')
    <div class="mx-auto w-[900px] flex flex-wrap justify-between">
        @foreach ($recettes as $recette)
            <a href="{{ route('recette.show', $recette->id) }}">
                <div class="mt-[50px] text-center bg-amber-900 rounded text-white">
                    <img src="{{ $recette->img }}" alt="image de la recette" width="200" class="rounded">

                    <h1 class="py-3">{{ $recette->titre }}</h1>
                </div>
            </a>
        @endforeach
    </div>
@endsection
