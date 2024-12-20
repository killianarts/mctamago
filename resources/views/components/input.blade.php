@props([
'type' => 'text',
'name' => 'submit',
'value' => old($name),
'colors' => 'bg-amber-100 border border-amber-900'
])
<input type="{{ $type }}" value="{{ $value }}" {{ $attributes->merge(['class' => "{$colors}"]) }} />
