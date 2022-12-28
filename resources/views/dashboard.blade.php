@extends('layouts.base')

@section('title')
    Dashboard - @parent
@endsection

@section('content')
    <div>
        <a href="/logout" class="py-2 px-5 bg-red-500 rounded text-white hover:bg-orange-500">Déconnexion</a>

        <a href="/" class="py-2 px-5 bg-red-500 rounded text-white hover:bg-orange-500">Ajouter une recette</a>
    </div>

    <div class="mx-auto w-[900px] flex flex-wrap justify-between">
        @foreach ($recettes as $recette)
            <div class="mt-[50px] text-center bg-amber-900 rounded text-white">
                <img src="{{ $recette->img }}" alt="image de la recette" width="200" class="rounded">

                <h1 class="py-3">{{ $recette->titre }}</h1>

                <div class="flex justify-around pb-3">
                    <img src="update.svg" alt="" width="30" >
                    <img src="delete.svg" alt="" width="30" >

                    @if ($recette->visible == 1)
                        <img src="valide.svg" alt="" width="30" >
                    @else
                        <img src="nonValide.svg" alt="" width="30" >
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection