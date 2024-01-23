@if($text)
    <div {!! $attributes->merge(['class' => 'form-text']) !!}>{{ $text }}</div>
@endif
