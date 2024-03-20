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
                {!! nl2br(e($value ?: trans('forms::string.blank'))) !!}
            @elseif(is_array($value))
                <ul class="list list--check">
                    @foreach($value as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @else
                {{ $value ?: trans('forms::string.blank') }}
            @endif
        @else
            {{ $slot }}
        @endif
    </dd>
</dl>
