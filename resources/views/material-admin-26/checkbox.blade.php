<x-forms::form-group :wrap="$showLabel && $type != 'hidden'" :label="$label ?: $label()" :name="$attributes->get('id') ?: $id()" :framework="$framework" :inline="$inline" :required="$required" :floating="$floating">
    <div
        @class([
            'checkbox',
            'mt-2' => $inline,
            'mb-2' => ! $inline,
        ])>
        <input
            {!! $attributes->merge([
                'class' => 'form-check-input ' . ($hasErrorAndShow($name) ? 'is-invalid' : '')
            ]) !!}
            id="{{ $attributes->get('id') ?: $id() }}"
            name="{{ $name }}"
            type="checkbox"
            value="{{ $value }}"
            @required($required)
            @checked($checked)
        />

        <x-forms::label
            :label="$label"
            :for="$attributes->get('id') ?: $id()"
            class="checkbox__label"
            :required="$inline ? false : $required"
        >
            @if($inline)
                <x-slot:label>
                </x-slot:label>
            @endif
        </x-forms::label>

        @if(! empty($help))
            <x-forms::input-help :framework="$framework" :attributes="$help->attributes">
                {{ $help }}
            </x-forms::input-help>
        @endif

        @if($hasErrorAndShow($name))
            <x-forms::errors :framework="$framework" :name="$name" />
        @endif
    </div>
</x-forms::form-group>
