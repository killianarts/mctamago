@props(['label', 'name', 'type' => 'text', 'value' => old($name), 'colors' => 'bg-amber-100 border border-amber-900'])
<div>
    <label class="grid grid-cols-2 items-center text-xl font-bold">
        <span>{{ ucfirst(strtolower($label)) }}</span>
        <input id="id_{{ $name }}" name="{{ $name }}" type="{{ $type }}" @if (isset($value)) value="{{ $value }}" @endif {{ $attributes->merge(['class' => "{$colors}"]) }} />
    </label>
    @error("{$name}")
    <div>
        {{ $message }}
    </div>
    @enderror
</div>
