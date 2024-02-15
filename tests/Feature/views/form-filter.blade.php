<x-form-filter>
    <x-form-input :label="__('Search')" name="search" :value="Request::input('search', old('search'))" placeholder="{{ __('Search..') }}" />

    <x-form-input type="hidden" name="test" />
</x-form-filter>
