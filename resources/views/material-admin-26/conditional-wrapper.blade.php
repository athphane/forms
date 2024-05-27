<div
    {{ $attributes }}

    data-enable-elem="{{ $enableElem }}"
    data-enable-section-value="{{ json_encode($enableValue) }}"

    @if($hideFields)
    data-hide-fields="true"
    @endif

    @if($disable)
    data-disable="true"
    @endif
>
    {{ $slot }}
</div>
