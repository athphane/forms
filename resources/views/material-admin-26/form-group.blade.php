@if($wrap)
<div {!! $attributes->merge(['class' => ($floating ? 'form-group form-group--float' : ($inline ? 'row' : 'form-group'))]) !!}>
    @if(! $floating)
        <x-forms::label :label="$label ?: $label()" for="{{ $name }}" :framework="$framework" :inline="$inline" :required="$required" :floating="false" />
    @endif

    @if($inline && (! $floating))
    <div class="col-sm-9 col-lg-10">
        <div class="form-group">
    @endif
@endif
        {!! $slot !!}
@if($wrap)
    @if($inline && (! $floating))
        </div>
    </div>
    @endif

    @if($floating)
        <x-forms::label :label="$label ?: $label()" :for="$name" :framework="$framework" :required="$required" floating />
    @endif
</div>
@endif

