@extends('base')

@section('title', ' | Create post')

@section('main')
    @parent
    <section class="flex flex-col items-center justify-center h-[calc(100vh-66px-56px)]">
        <x-burner-image class="w-32" />
        <h2 class="my-4 text-3xl">Create post <x-authenticated-user /> at <x-app-name />
        </h2>
        <x-forms.container class="flex w-1/2 gap-4">
            <form action="post/create" method="post">
                <x-input name="title" label="Title" placeholder="Title" />
                <x-text-area name="content" label="Content" />
                <x-input type="file" name="image" label="Image" placeholder="Image"
                    class="file:mr-4 file:py-2 file:px-4 file:rounded-md file:cursor-pointer file:transition-all file:duration-150 file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-ring hover:file:bg-violet-100" />
                <x-button label="Create" type="submit" class="mt-4" />
            </form>
        </x-forms.container>
        <div id="image-placeholder"></div>
    </section>
@endsection

@section('scripts')
    <script></script>
@endsection
