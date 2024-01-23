@if($text)
    <small {!! $attributes->merge(['class' => 'form-text text-muted']) !!}>{{ $text }}</small>
@endif
