<div
    {!! $attributes->merge([
        'class' => 'card',
    ]) !!}
>
    {{ $image_top ?? '' }}

    {{ $header ?? '' }}

    <div class="card-body">
        <h4 class="card-title">
            {{ $title }}
        </h4>

        {{ $subtitle ?? '' }}

        {!! $slot !!}
    </div>

    {{ $footer ?? '' }}
</div>
