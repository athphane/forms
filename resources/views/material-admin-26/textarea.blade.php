<x-forms::form-group :wrap="$showLabel && $type != 'hidden'" :label="$label ?: $label()" :name="$attributes->get('id') ?: $id()" :framework="$framework" :inline="$inline" :required="$required" :floating="$floating">
    <textarea
        {!! $attributes->merge([
            'class' => 'form-control' . ($hasError($name) ? ' is-invalid' : ''),
            'required' => $required
        ]) !!}
        type="{{ $type }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        @if($label && ! $attributes->get('id'))
            id="{{ $id() }}"
        @endif
        {{--  Placeholder is required as of writing  --}}
        @if($floating && !$attributes->get('placeholder'))
            placeholder="&nbsp;"
        @endif
    >{!! $value !!}</textarea>
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
