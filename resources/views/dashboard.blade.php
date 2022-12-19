@extends('layouts.base')

@section('title')
    Dashboard - @parent
@endsection

@section('content')
    <div>
        <a href="/logout" class="py-2 px-5 bg-red-500 rounded text-white hover:bg-orange-500">Déconnexion</a>
    </div>
@endsection