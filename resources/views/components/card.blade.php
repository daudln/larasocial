    <section
        class="p-4 relative rounded-md dark:bg-slate-700 h-[24rem] shadow-md ring-primary ring-1 overflow-hidden hover:scale-[1.02] transition-all cursor-pointer">
        <img src="{{ asset('storage/' . $image) }}" alt="{{ $title }}"
            class="object-cover w-full rounded-md rounded-t h-52" decoding="async" />
        <h4 class="text-2xl text-primary">
            <a href="{{ url('posts', $slug) }}" title="{{ $title }}" class="line-clamp-1">{{ $title }}</a>
        </h4>
        <p class="line-clamp-3">{{ $content }}</p>
        <small class="absolute text-xs text-gray-400 bottom-4">{{ $subtitle }}</small>
    </section>
