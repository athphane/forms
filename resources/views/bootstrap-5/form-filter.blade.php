<div class="card">
    <div class="card-body">
        {{ $slot }}
    </div>

    <x-form-input
        type="hidden"
        name="orderby"
        :value="Request::input('orderby', old('orderby'))"
    />

    <x-form-input
        type="hidden"
        name="order"
        :value="Request::input('order', old('order'))"
    />

    {{ $hiddenFields }}
</div>
