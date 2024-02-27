<td
    {{ $attributes->merge([]) }}
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
