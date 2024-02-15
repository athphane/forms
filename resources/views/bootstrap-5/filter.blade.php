<div class="card">
    <div class="card-body">
        {{ $slot }}

        <x-forms::input
            type="hidden"
            name="orderby"
            :value="Request::input('orderby', old('orderby'))"
        />

        <x-forms::input
            type="hidden"
            name="order"
            :value="Request::input('order', old('order'))"
        />
    </div>
</div>
