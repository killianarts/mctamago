@props(['legend'])

<fieldset class="border border-black/20 border-dotted">
    <legend class="ml-3 px-3 uppercase font-[900] text-xs">
        {{ $legend }}
    </legend>
    <div class="pl-6 pb-2 font-[500]">{{ $slot }}</div>
</fieldset>
