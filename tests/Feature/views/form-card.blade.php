<div id="normal">
    <x-forms::card title="Card Title">
        This is a card
    </x-forms::card>
</div>

<div id="header">
    <x-forms::card title="Card Title">
        <x-slot name="header">
            <h5 class="card-header">Card Header</h5>
        </x-slot>
        This is a card
    </x-forms::card>
</div>


<div id="footer">
    <x-forms::card title="Card Title">
        <x-slot name="footer">
            <div class="card-footer">Card Footer</div>
        </x-slot>
        This is a card
    </x-forms::card>
</div>

<div id="image-top">
    <x-forms::card title="Card Title">
        <x-slot name="image_top">
            <img src="..." class="card-img-top" alt="...">
        </x-slot>
        This is a card
    </x-forms::card>
</div>

<div id="subtitle">
    <x-forms::card title="Card Title">
        <x-slot name="subtitle">
            <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6>
        </x-slot>
        This is a card
    </x-forms::card>
</div>
