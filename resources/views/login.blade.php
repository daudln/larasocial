@extends('base')
@section('title', ' | Login')

@section('main')
    <div class="flex flex-col items-center gap-4">
        <img src="images/laravel-logo.svg" alt="Laravel Burner" class="w-32 h-32">
        <h2 class="text-3xl">Login to Larasocial</h2>
    </div>
    <x-forms.container>
        <form action="/signup" method="POST">
            @csrf
            <div class="flex flex-col gap-6">
                <x-forms.input type="text" name="username" id="username" placeholder="Username" label="Username" />
                <x-forms.input type="password" name="password" id="password" placeholder="Password" label="Password" />
                <div>
                    <x-button label="Login" />
                </div>
            </div>
        </form>
    </x-forms.container>
    </div>
@endsection
