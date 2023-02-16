@props(['post' => null])

<x-form {{ $attributes }}>
    <x-form-item>
        <x-label required>{{ __('Название поста') }}</x-label>
        <x-input name="title" value="{{ $post->title ?? '' }}" autofocus />
        <x-error name="title" />
    </x-form-item>

    <x-form-item>
        <x-label required>{{ __('Содержание поста') }}</x-label>
        <x-trix name="content" value="{{ $post->content ?? '' }}" />
        <x-error name="content" />
    </x-form-item>

    <x-form-item>
        <x-label required>{{ __('Дата публикации') }}</x-label>
        <x-input name="published_at" value="{{ $post?->published_at?->format('d.m.Y') ?? '' }}" placeholder="dd.mm.yyyy" />
        <x-error name="published_at" />
    </x-form-item>

    <x-form-item>
        <x-checkbox name="published" :checked="$post?->published">
            Опубликовано
        </x-checkbox>
    </x-form-item>

    {{ $slot }}
</x-form>
