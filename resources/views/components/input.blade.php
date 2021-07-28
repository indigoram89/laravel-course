<input {{ $attributes->class([
    'form-control',
])->merge([
    'type' => 'text',
    'value' => request()->old($attributes->get('name')),
]) }}>
