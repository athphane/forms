<x-form-group :wrap="$label && $type != 'hidden'" :label="$label" :name="$attributes->get('id') ?: $id()" :framework="$framework" :inline="$inline" :required="$required" :floating="$floating">
    <select
        {!! $attributes->merge([
            'class' => 'form-control' . ($hasError($name) ? ' is-invalid' : ''),
            'required' => $required
        ]) !!}
        name="{{ $name }}"

        @if($multiple)
            multiple
        @endif

        @if($placeholder)
            placeholder="{{ $placeholder }}"
        @endif

        @if($label && ! $attributes->get('id'))
            id="{{ $id() }}"
        @endif
    >
        @if($placeholder)
            <option value="" @if($nothingSelected()) selected="selected" @endif>{{ $placeholder }}</option>
        @endif

        @forelse($options as $key => $option)
            <option value="{{ $key }}" @if($isSelected($key)) selected="selected" @endif>{{ $option }}</option>
        @empty
            {!! $slot !!}
        @endforelse
    </select>

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
