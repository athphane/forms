@php
$items = [
    [
        'title'    => __('Active Tab'),
        'url'      => 'https://active-tab.test',
        'active'   => true,
        'disabled' => false,
    ],
    [
        'title'    => __('Inactive Tab'),
        'url'      => 'https://inactive-tab.test',
        'active'   => false,
        'disabled' => false,
    ],
    [
        'title'    => __('Disabled Tab'),
        'url'      => 'https://disabled-tab.test',
        'active'   => false,
        'disabled' => true,
    ],
];
@endphp

<x-forms::nav-tabs :tabs="$items" />
