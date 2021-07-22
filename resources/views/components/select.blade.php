@props(['value' => null, 'options' => []])

<select {{ $attributes->class([
    'form-control',
]) }}>
    @foreach($options as $key => $text)
        <option value="{{ $key }}" {{ ($key == $value) ? 'selected' : null }}>
            {{ $text }}
        </option>
    @endforeach
</select>
