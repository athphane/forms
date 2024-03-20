<td {{ $attributes->merge([]) }}
    @if($showLabel && $name)
    data-col="{{ $label ?: $label() }}"
    @endif
>
    @if($isAdminModel())
        {!! $value->admin_link !!}
    @elseif($value)
        @if($multiline)
            {!! nl2br(e($value ?: trans('forms::string.blank'))) !!}
        @elseif(is_array($value))
            {{ implode(trans('forms::table_array_separator'), $value) }}
        @else
            {{ $formatValue() }}
        @endif
    @else
        {{ $slot }}
    @endif
</td>

