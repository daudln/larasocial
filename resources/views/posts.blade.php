@extends('base')
@section('title', ' | Posts')

@section('main')
    <x-modal title="Create post">
        <form action="posts/create" method="POST" enctype="multipart/form-data">
            @csrf
            <x-input name="title" label="Title" placeholder="Title" />
            <x-text-area name="content" label="Content" />
            <x-input type="file" name="image" label="Image" placeholder="Image"
                class="file:mr-4 file:py-2 file:px-4 file:rounded-md file:cursor-pointer file:transition-all file:duration-150 file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-ring hover:file:bg-violet-100" />
            <div class="flex justify-end gap-3 mt-4">
                <x-button label="Create" type="submit" class="bg-green-600 border-none hover:bg-green-700" />
                <x-button type="button" label="close" class="border-none bg-primary hover:bg-red-600 hover:text-white" />
            </div>
        </form>
        <div id="image-placeholder"></div>
    </x-modal>
    <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($posts as $post)
            <x-card-post :post="$post" />
        @endforeach
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/posts.js') }}"></script>
@endsection
