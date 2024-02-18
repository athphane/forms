<x-forms::form-group :wrap="$label && $type != 'hidden'" :label="$label" :name="$attributes->get('id') ?: $id()" :framework="$framework" :inline="$inline" :required="$required" :floating="$floating">
    @if((! empty($prepend)) || (! empty($append)))
    <div class="input-group mb-0">
        @if(! empty($prepend))
            <div class="input-group-prepend">
            {{ $prepend }}
            </div>
        @endif
    @endif

    <input
        {!! $attributes->merge([
            'class' => 'form-control' . ($type === 'color' ? ' form-control-color' : '') . ($hasError($name) ? ' is-invalid' : ''),
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
    <i class="form-group__bar"></i>

    @if((! empty($prepend)) || (! empty($append)))
        @if(! empty($append))
            <div class="input-group-append">
                {{ $append }}
            </div>
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
