@if($label)
    <label {!! $attributes->merge(['class' => (! $floating && $inline ? 'col-sm-3 col-lg-2 col-form-label' : null)]) !!}>{{ $label }}@if($required) <x-forms::label-required :framework="$framework"></x-forms::label-required>@endif</label>
@endif
