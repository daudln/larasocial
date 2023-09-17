<div class="flex flex-col">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}"
        class="input {{ $class }}" />
    @error($name)
        <span class="mt-1 text-sm text-primary after:content-['*']">{{ ucfirst($name) }} is required</span>
    @enderror
</div>
