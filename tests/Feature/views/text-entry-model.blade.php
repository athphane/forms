@php
    $org = [
        'name' => 'Javaabu'
    ];
@endphp

@model($org)
<x-forms::text-entry label="Name" name="name" />
@endmodel
