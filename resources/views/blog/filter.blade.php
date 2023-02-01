<x-form action="{{ route('blog') }}" method="get">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="search" value="{{ request('search') }}" placeholder="{{ __('Поиск') }}" />
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="from_date" value="{{ request('from_date') }}" placeholder="{{ __('Дата начала') }}" />
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="to_date" value="{{ request('to_date') }}" placeholder="{{ __('Дата окончания') }}" />
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-input name="tag" value="{{ request('tag') }}" placeholder="{{ __('Тег') }}" />
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="mb-3">
                <x-button type="submit" class="w-100">
                    {{ __('Применить') }}
                </x-button>
            </div>
        </div>
    </div>
</x-form>
