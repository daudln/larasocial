@extends('base')
@section('title', ' | Posts')

@section('main')
    <article class="p-4 h-full items-center grid-cols-1 grid md:grid-cols-12 gap-4">
        <section class="col-span-6">
            <h2 class="mt-4 text-3xl text-primary">{{ $post->title }}</h2>
            <p class="text-xl mt-4">{{ $post->content }}</p>
            <img src="http://127.0.0.1:8000/images/posts/{{ $post->image }}" alt="{{ $post->title }}"
                class="w-full max-h-[42rem] object-contain mt-4 rounded-lg">
        </section>
        <section class="col-span-3">
            <h2 class="mt-4 text-3xl text-primary">Comments</h2>
            <p class="text-xl mt-4">{{ $post->content }}</p>
            <img src="http://127.0.0.1:8000/images/posts/{{ $post->image }}" alt="{{ $post->title }}"
                class="w-full max-h-[42rem] object-contain mt-4 rounded-lg">
        </section>
        <section class="col-span-3">
            <h2 class="mt-4 text-3xl text-primary">{{ $post->title }}</h2>
            <p class="text-xl mt-4">{{ $post->content }}</p>
            <img src="http://127.0.0.1:8000/images/posts/{{ $post->image }}" alt="{{ $post->title }}"
                class="w-full max-h-[42rem] object-contain mt-4 rounded-lg">
        </section>
    </article>
@endsection
