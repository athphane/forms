<dl {!! $attributes->merge(['class' => 'mb-1'.($inline ? ' row' : '')]) !!}>
    @if($showLabel)
        <dt
            @if($inline)
            class="col-sm-6 col-md-4"
            @endif
        >{{ $label ?: $label() }}</dt>
    @endif

    <dd
        @if($inline)
        class="col-sm-6 col-md-8"
        @endif
    >
        @if($isAdminModel())
            {!! $value->admin_link !!}
        @elseif($value)
            @if($multiline)
                {!! nl2br(e($value)) !!}
            @else
                {{ $value }}
            @endif
        @else
            {{ $slot }}
        @endif
    </dd>
</dl>
