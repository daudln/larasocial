@extends('base')

@section('title', 'Home')

@section('main')
    @parent
    <section class="flex flex-col items-center justify-center h-[calc(100vh-66px-56px)]">
        <x-burner-image class="w-56" />
        <h2 class="mt-4">Welcome to <x-app-name /></h2>
    </section>
@endsection
