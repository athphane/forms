<div {{ $attributes->merge([
        'class' => 'checkbox mb-2'
    ])}}
>
    <input
        id="{{ $attributes->get('id') ?: $id() }}"
        type="checkbox"
        {!! $attributes->merge([
            'class' => 'form-check-input' . ($hasErrorAndShow($name) ? ' is-invalid' : ''),
        ]) !!}
        @required($required)
        class="form-check-input"
        value="{{ $value }}"
        name="{{ $name }}"
        @if($checked)
            checked="checked"
        @endif
    />
    <label class="checkbox__label" for="{{ $attributes->get('id') ?: $id() }}">
        {{ $label }} @if($required) <span class="text-danger">*</span> @endif
    </label>
</div>
