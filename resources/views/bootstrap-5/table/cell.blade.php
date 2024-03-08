<td {{ $attributes->merge([]) }}
    @if($showLabel && $name)
    data-col="{{ $label ?: $label() }}"
    @endif
>
    @if($isAdminModel())
        {!! $value->admin_link !!}
    @elseif($value)
        @if($multiline)
            {!! nl2br(e($value)) !!}
        @else
            {{ $formatValue() }}
        @endif
    @else
        {{ $slot }}
    @endif
</td>

