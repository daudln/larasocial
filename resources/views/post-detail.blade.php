@extends('base')
@section('title', ' | Posts')

@section('main')
    <article class="grid h-full grid-cols-1 gap-4 p-4 md:grid-cols-12">
        <section class="col-span-6 overflow-hidden">
            <h2 class="mt-4 text-3xl text-primary">{{ $post->title }}</h2>
            <p class="mt-4 text-xl">{{ $post->content }}</p>
            <img src={{ asset('storage/' . $post->image) }} alt="{{ $post->title }}"
                class="max-h-[42rem] object-contain mt-4 rounded-lg ">
            @if (Auth::user()->id == $post->user_id)
                <x-button type="button" label="Edit" class="self-end m-4 text-xs border-none bg-none" />
            @endif
        </section>
        <section class="col-span-3">

        </section>
        <section class="col-span-3 overflow-hidden">

            <h4>Add comment</h4>
            <x-forms.container class="w-full">
                <textarea name="comment" placeholder="" type="text" class="input"></textarea>
            </x-forms.container>
        </section>
    </article>
@endsection
