@if($wrap)
<div {!! $attributes->merge(['class' => 'mb-4'.($floating ? ' form-floating' : ($inline ? ' row' : ''))]) !!}>
    @if(! $floating)
        <x-forms::label :label="$label" :for="$name" :framework="$framework" :inline="$inline" :required="$required" :floating="false" />
    @endif

    @if($inline && (! $floating))
    <div class="col-sm-9 col-lg-10">
    @endif
@endif

        {!! $slot !!}

@if($wrap)
    @if($inline && (! $floating))
    </div>
    @endif

    @if($floating)
        <x-forms::label :label="$label" :for="$name" :framework="$framework" :required="$required" floating />
    @endif
</div>
@endif
