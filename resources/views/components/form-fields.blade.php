@foreach($model->getFillable() as $attribute)
<div>
    <label for="{{ $attribute }}">{{ ucfirst($attribute) }}</label>
    <input type="text" name="{{ $attribute }}" id="{{ $attribute }}" value="{{ old($attribute, $model->$attribute ?? '') }}" />
    @error($attribute)
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>
@endforeach
