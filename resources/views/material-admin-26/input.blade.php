<x-forms::form-group :wrap="$label && $type != 'hidden'" :label="$label" :name="$attributes->get('id') ?: $id()" :framework="$framework" :inline="$inline" :required="$required" :floating="$floating">
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

    @if(! empty($help))
        <x-forms::input-help :framework="$framework">
            {!! $help !!}
        </x-forms::input-help>
    @endif

    @if($hasErrorAndShow($name))
        <x-forms::errors :framework="$framework" :name="$name" />
    @endif
</x-forms::form-group>
