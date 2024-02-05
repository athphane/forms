<div id="normal">
    <x-form-card title="Card Title">
        This is a card
    </x-form-card>
</div>

<div id="header">
    <x-form-card title="Card Title">
        <x-slot name="header">
            <h5 class="card-header">Card Header</h5>
        </x-slot>
        This is a card
    </x-form-card>
</div>


<div id="footer">
    <x-form-card title="Card Title">
        <x-slot name="footer">
            <div class="card-footer">Card Footer</div>
        </x-slot>
        This is a card
    </x-form-card>
</div>

<div id="image-top">
    <x-form-card title="Card Title">
        <x-slot name="image_top">
            <img src="..." class="card-img-top" alt="...">
        </x-slot>
        This is a card
    </x-form-card>
</div>

<div id="subtitle">
    <x-form-card title="Card Title">
        <x-slot name="subtitle">
            <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6>
        </x-slot>
        This is a card
    </x-form-card>
</div>
