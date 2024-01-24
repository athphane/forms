<x-form :model="['select' => '0']">
    <x-form-select name="select" :options="['1' => 'Yes', '0' => 'No']" />

    <x-form-submit>Submit</x-form-submit>
</x-form>
