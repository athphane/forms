@php
    $filter_id = $attributes->get('id') ?? $id();
@endphp

<div
    id="{{ $filter_id }}"
    class="results__header toggled toggle-block filter-card"
>
    <h4 class="card-title">{{ __('Filter') }}</h4>
    <div class="actions">
        <a class="actions__item zmdi zmdi-filter-list" href="#" data-tg-toggle="#{{ $filter_id }}" data-tg-icon="zmdi-filter-list">
        </a>
    </div>

    <div class="tg-view">
        {{ $slot }}
    </div>

    <x-form-input
        type="hidden"
        name="orderby"
        :value="Request::input('orderby', old('orderby'))"
    />

    <x-form-input
        type="hidden"
        name="order"
        :value="Request::input('order', old('order'))"
    />

    {{ $hiddenFields ?? ''}}
</div>
