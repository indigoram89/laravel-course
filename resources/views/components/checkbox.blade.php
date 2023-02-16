@php($id = Str::uuid())
@props(['checked' => false])

<div class="form-check">
    <input type="checkbox" {{ $attributes->merge([
        'value' => 1,
        'checked' => !! old($attributes->get('name'), $checked),
    ]) }} class="form-check-input" id="{{ $id }}">

    <label class="form-check-label" for="{{ $id }}">
        {{ $slot }}
    </label>
</div>
