@extends('layouts.base')

@section('title')
    Login - @parent
@endsection

@section('content')

    <div class="mx-auto w-[900px]">
        <form action="" method="post">
            @csrf

            <div class="space-y-6">
                <div class="w-full text-center space-y-2">
                    <label for="name" class="font-bold">Nom</label> <br>
                    <input type="text" name="name" id="name" class="border rounded px-2 py-2">
                </div>

                <div class="w-full text-center space-y-2">
                    <label for="password" class="font-bold">Mot de passe</label> <br>
                    <input type="password" name="password" id="password" class="border rounded px-2 py-2">
                </div>

                <div class="w-full text-center">
                    <button class="py-2 px-5 bg-red-500 rounded text-white hover:bg-orange-500">Connexion</button>
                </div>
            </div>
        </form>
    </div>
@endsection