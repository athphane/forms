@if($label)
    <label {!! $attributes->merge(['class' => (! $floating && $inline ? 'col-sm-3 col-lg-2 col-form-label' : null)]) !!}>{{ $label }}@if($required) <x-form-required :framework="$framework"></x-form-required>@endif</label>
@endif
