@php
    $org = [
        'name' => "Javaabu\nCompany"
    ];
@endphp

@model($org)
<x-forms::table.cell label="Name" name="name" multiline />
@endmodel
