<div class="card-body">
    <div class="d-flex justify-content-between">
        <div>
            {{ $slot }}
        </div>

        @isset($right)
            <div>
                {{ $right }}
            </div>
        @endisset
    </div>
</div>
