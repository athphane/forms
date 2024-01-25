<x-form :model="$post">
    <x-form-select2 name="author" :options="$options" ajax-url="/api/authors" name-field="list_name" is-ajax />
    <x-form-submit>Submit</x-form-submit>
</x-form>
