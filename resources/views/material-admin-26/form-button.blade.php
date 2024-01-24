<button
    {!! $attributes->merge([
        'class' => 'btn btn-' . $color,
    ]) !!}

    @if($type)
        type="{{ $type }}"
    @endif
>{!! $slot !!}</button>
