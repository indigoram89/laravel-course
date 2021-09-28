<div class="border-bottom pb-3 mb-4">
    @isset($link)
        <div class="mb-3">
            {{ $link }}
        </div>
    @endisset

    <div class="d-flex justify-content-between">
        <div>
            <h1 class="h2 m-0">
                {{ $slot }}
            </h1>
        </div>

        @isset($right)
            <div>
                {{ $right }}
            </div>
        @endisset
    </div>
</div>

<x-errors />

