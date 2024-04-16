@props([
    'reference' => '#',
    'json' => false,
    'values' => [],
    'withWrapper' => true,
    'hideFields' => true,
    'reverse' => false,
])

@php
    if ($json) {
        $values = json_encode($values);
    } else {

        if (! is_array($values)) {
            $values = [$values];
        }

        $values = "[" . implode(',', $values) . "]";
    }
@endphp

<div
    {{ $attributes }}
    @if ($withWrapper) class="row" @endif
    data-enable-elem="{{ $reference }}"
    data-enable-section-value="{{ $values }}"
    data-hide-fields="{{ $hideFields ? 'true' : 'false' }}"
    data-disable="{{ $reverse ? 'true' : 'false' }}"
>
    @if ($withWrapper)
        <div class="col"> @endif
            {{ $slot }}
            @if ($withWrapper) </div>
    @endif
</div>
