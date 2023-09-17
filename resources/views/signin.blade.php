@extends('base')
@section('title', ' | Login')

@section('main')
    <section class="flex flex-col items-center justify-center h-[calc(100vh-66px-56px)]">
        <div class="flex flex-col items-center gap-4">
            <x-burner-image class="w-32 h-32" />
            <h2 class="mb-4 text-3xl">Login to <x-app-name /></h2>
        </div>
        <x-forms.container>
            <form action="/login" method="POST">
                @csrf
                <div class="flex flex-col gap-6">
                    <x-forms.input type="email" name="email" id="email" placeholder="Email" label="Email" />
                    <x-forms.input type="password" name="password" id="password" placeholder="Password" label="Password" />
                    <x-button label="Login" class="self-end w-1/3" />
                </div>
            </form>
        </x-forms.container>
        </div>
    </section>
@endsection
