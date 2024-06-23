<x-forms::form-group :wrap="$showLabel && $type != 'hidden'" :label="$label ?: $label()" :name="$attributes->get('id') ?: $id()" :framework="$framework" :inline="$inline" :required="$required" :floating="$floating">
    <div @class([
        'fileinput',
        $fileInputClass,
        'fileinput-exists' => (bool) $value,
        'fileinput-new' => empty($value),
        'disabled' => $disabled,
    ])
         @if(! $disabled)
             data-provides="fileinput"
        @endif
    >
        <span class="btn btn-primary btn-file mr-3{{ $disabled ? ' disabled' : '' }}">
            <span class="fileinput-new">{{ trans('forms::strings.fileinput_select_file') }}</span>
            <span class="fileinput-exists">{{ trans('forms::strings.fileinput_change_file') }}</span>
            <input
                {!! $attributes->merge([
                    'class' => ($hasError($name) ? 'is-invalid' : ''),
                    'required' => $required,
                    'disabled' => $disabled
                ]) !!}
                type="file"
                accept="{{ implode(',', $mimetypes) }}"
                name="{{ $name }}"
                @if($label && ! $attributes->get('id'))
                    id="{{ $id() }}"
                @endif
        />
        </span>
        <span class="fileinput-filename">
            @unless(empty($value))
            <a href="{{ $value }}" title="{{ $value }}" target="_blank">
                <i class="{{ $downloadIcon }}"></i> {{ $fileName ?: $value }}
            </a>
            @endunless
        </span>
        <a href="#" class="close fileinput-exists"
           @if(! $disabled)
           data-dismiss="fileinput"
           @endif
        >&times;</a>
    </div>

    @if($showHint || (! empty($help)))
        <x-forms::input-help :framework="$framework">
            @empty($help)
                {{ $getHint() }}
            @else
            {!! $help !!}
            @endempty
        </x-forms::input-help>
    @endif

    @if($hasErrorAndShow($name))
        <x-forms::errors :framework="$framework" :name="$name" />
    @endif
</x-forms::form-group>
