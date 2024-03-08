<x-forms::form-group :wrap="$showLabel && $type != 'hidden'" :label="$label ?: $label()" :name="$attributes->get('id') ?: $id()" :framework="$framework" :inline="$inline" :required="$required" :floating="$floating">
    @if($isDateInput() || (! empty($prepend)) || (! empty($append)))
        <div class="input-group">
            @if($isDateInput())
                <span class="input-group-text">
                    <i class="{{ $icon ?? 'zmdi zmdi-calendar' }}"></i>
                </span>
            @elseif(! empty($prepend))
                {{ $prepend }}
            @endif
    @endif

    <input
        {!! $attributes->merge([
            'class' => 'form-control' . ($type === 'color' ? ' form-control-color' : '') . ($hasError($name) ? ' is-invalid' : '') . ($isDateInput() ? ' ' . $datePickerClass() : ''),
            'required' => $required
        ]) !!}
        type="{{ $type }}"
        value="{{ $value ?? ($type === 'color' ? '#000000' : '') }}"
        name="{{ $name }}"
        @if($label && ! $attributes->get('id'))
            id="{{ $id() }}"
        @endif
        {{--  Placeholder is required as of writing  --}}
        @if($floating && !$attributes->get('placeholder'))
            placeholder="&nbsp;"
        @endif
    />

    @if($isDateInput() || (! empty($prepend)) || (! empty($append)))
        @if($isDateInput())
            <a href="#" data-date-clear="#{{ $attributes->get('id') ?: $id() }}" class="btn btn-link disable-w-input" title="{{ __('Clear') }}">
                <i class="{{ $clearIcon ?? 'zmdi zmdi-close' }}"></i>
            </a>
        @elseif(! empty($append))
            {{ $append }}
        @endif
        </div>
    @endif

    @if(! empty($help))
        <x-forms::input-help :framework="$framework" :attributes="$help->attributes">
            {{ $help }}
        </x-forms::input-help>
    @endif

    @if($hasErrorAndShow($name))
        <x-forms::errors :framework="$framework" :name="$name" />
    @endif
</x-forms::form-group>
