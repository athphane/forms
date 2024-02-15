@if($label)
    <label {!! $attributes->merge(['class' => ($floating ? null : ($inline ? 'col-sm-3 col-lg-2 col-form-label' : 'form-label'))]) !!}>{{ $label }}@if($required) <x-forms::label-required :framework="$framework" />@endif</label>
@endif
