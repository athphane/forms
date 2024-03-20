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
        @if($slot->isNotEmpty())
            {{ $slot }}
        @elseif($isAdminModel())
            {!! $value->admin_link !!}
        @else
            @if($multiline)
                {!! nl2br(e($value ?: trans('forms::string.blank'))) !!}
            @elseif(is_array($value))
                <ul>
                    @foreach($value as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @else
                {{ $value ?: trans('forms::string.blank') }}
            @endif
        @endif
    </dd>
</dl>
