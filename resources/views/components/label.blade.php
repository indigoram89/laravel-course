@props(['required' => false])

<label {{ $attributes->class([
    'mb-2', ($required ? 'required' : ''),
]) }}>
    {{ $slot }}
</label>
