<x-form-group :wrap="$label && $type != 'hidden'" :label="$label" :name="$attributes->get('id') ?: $id()" :framework="$framework" :inline="$inline" :required="$required" :floating="$floating">
    <textarea
        {!! $attributes->merge([
            'class' => 'form-control' . ($hasError($name) ? ' is-invalid' : ''),
            'required' => $required
        ]) !!}
        type="{{ $type }}"
        name="{{ $name }}"
        @if($label && ! $attributes->get('id'))
            id="{{ $id() }}"
        @endif
        {{--  Placeholder is required as of writing  --}}
        @if($floating && !$attributes->get('placeholder'))
            placeholder="&nbsp;"
        @endif
    >
        {{ $value }}
    </textarea>
    <i class="form-group__bar"></i>

    @if(! empty($help))
        <x-form-help :framework="$framework">
            {!! $help !!}
        </x-form-help>
    @endif

    @if($hasErrorAndShow($name))
        <x-form-errors :framework="$framework" :name="$name" />
    @endif
</x-form-group>
