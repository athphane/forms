<div
    {!! $attributes->merge([
        'class' => 'card',
    ]) !!}
>
    {{ $image_top ?? '' }}

    {{ $header ?? '' }}

    <div class="card-body">
        <h5 class="card-title">
            {{ $title }}
        </h5>

        {{ $subtitle ?? '' }}

        {!! $slot !!}
    </div>

    {{ $footer ?? '' }}
</div>
