<button type="{{ $type }}" id="{{ $label }}"
    class="text-gray-700 cursor-pointer transition-all input dark:text-white disabled:bg-slate-500 disabled:cursor-not-allowed disabled:hover:scale-100 disabled:hover:bg-slate-600 disabled:hover:text-slate-100  {{ $class }}"
    {{-- @disabled($errors->isNotEmpty()) --}}>{{ ucfirst($label) }}
</button>
