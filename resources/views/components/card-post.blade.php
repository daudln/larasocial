<article class="rounded-md {{ $class }}">
    <x-card image="{{ $post->image }}" title="{{ $post->title }}" content="{{ $post->content }}"
        subtitle="{{ $post->created_at }}" slug="{{ $post->slug }}" />
</article>
