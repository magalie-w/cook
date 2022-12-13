@extends('layouts.base')

@section('title')
    {{ $recette->titre }} - @parent
@endsection

@section('content')
    <div>
        <h1>{{ $recette->titre }}</h1>
    </div>
@endsection