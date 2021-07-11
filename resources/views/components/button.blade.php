@props(['color' => 'primary', 'size' => ''])

<button {{ $attributes->class([
    "btn btn-{$color}", ($size ? "btn-{$size}" : ''),
])->merge([
    'type' => 'button',
]) }}>
    {{ $slot }}
</button>
