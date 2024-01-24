<x-form :model="$post">
    <x-form-input name="content" />
    <x-form-select name="comments" :options="$options" multiple many-relation />
    <x-form-submit>Submit</x-form-submit>
</x-form>
