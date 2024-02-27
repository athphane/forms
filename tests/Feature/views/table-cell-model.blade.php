@php
    $org = [
        'name' => 'Javaabu'
    ];
@endphp

<x-forms::table.row :model="$org">
    <x-forms::table.cell label="Name" name="name" />
</x-forms::table.row>
