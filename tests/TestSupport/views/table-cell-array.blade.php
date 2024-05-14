@php
    $org = [
        'name' => ['apple' => 'orange']
    ];
@endphp

@model($org)
<x-forms::table.cell label="Name" name="name" />
@endmodel
