<x-forms::form-group :wrap="$showLabel" :label="$label ?: $label()" :name="$attributes->get('id') ?: $id()" :framework="$framework" :inline="$inline" :required="$required" :floating="$floating">

    @if($enableCoordinates)
    @endif



    @if(! empty($help))
        <x-forms::input-help :framework="$framework">
            {!! $help !!}
        </x-forms::input-help>
    @endif

    @if($hasErrorAndShow($name))
        <x-forms::errors :framework="$framework" :name="$name" />
    @endif
</x-forms::form-group>
