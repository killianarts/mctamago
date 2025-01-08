@props(['label', 'options', 'name', 'type' => 'text', 'value' => old($name), 'colors' => 'bg-amber-100 border border-amber-900', 'blank_option' => '---'])
<div>
    <label class="grid grid-cols-2 items-center text-xl font-bold">
        <span>{{ ucfirst(strtolower($label)) }}</span>
        <select id="{{ $name }}-select" name="{{ $name }}" {{ $attributes->merge(['class' => "{$colors}"]) }}>
            @if (!$attributes->has('required'))
                <option value="{{ $blank_option }}">
                    {{ $blank_option }}
                </option>
            @endif
            @foreach ($options as $option)
                <option value="{{ $option->value }}" @if ($option->value == $value) selected @endif>
                {{ $option->name }}
                        </option>
            @endforeach
        </select>
    </label>
    @error("{$name}")
    <div>
        {{ $message }}
    </div>
    @enderror
</div>
