@extends('base')
@section('title', ' | Posts')

@section('main')
    <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($posts as $post)
            <x-card-post :post="$post" />
        @endforeach
    </div>
@endsection
