@php($id = Str::uuid())

<div class="form-check">
    <input type="checkbox" {{ $attributes->merge([
        'value' => 1,
        'checked' => !! request()->old($attributes->get('name')),
    ]) }} class="form-check-input" id="{{ $id }}">

    <label class="form-check-label" for="{{ $id }}">
        {{ $slot }}
    </label>
</div>
