<x-forms::filter>
    <x-forms::input :label="__('Search')" name="search" :value="Request::input('search', old('search'))" placeholder="{{ __('Search..') }}" />

    <x-forms::input type="hidden" name="test" />
</x-forms::filter>
