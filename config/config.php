<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default CSS Framework
    |--------------------------------------------------------------------------
    |
    | This option controls the default CSS framework that will be used by the
    | package when rendering form components
    |
    | Supported: "bootstrap-5", "material-admin-26"
    |
    */

    'framework' => 'bootstrap-5',

    'use_eloquent_date_casting' => false,

    /*
    |--------------------------------------------------------------------------
    | Framework Settings
    |--------------------------------------------------------------------------
    |
    | Framework specific configs
    |
    */

    'frameworks' => [
        'bootstrap-5' => [
            'icon-prefix' => 'fa',
            'date-icon' => 'calendar',
            'datetime-icon' => 'calendar',
            'time-icon' => 'clock',
            'date-clear-icon' => 'close',
            'date-clear-btn-class' => 'btn btn-outline-secondary btn-date-clear disable-w-input',
            'file-download-icon' => 'arrow-to-bottom',
            'file-upload-icon' => 'arrow-to-top',
            'file-clear-icon' => 'close',
            'image-icon' => 'image',
        ],

        'material-admin-26' => [
            'icon-prefix' => 'zmdi',
            'date-icon' => 'calendar',
            'datetime-icon' => 'calendar',
            'time-icon' => 'clock',
            'date-clear-icon' => 'close',
            'date-clear-btn-class' => 'text-body btn-date-clear disable-w-input',
            'file-download-icon' => 'open-in-new',
            'file-upload-icon' => 'upload',
            'file-clear-icon' => 'close',
            'image-icon' => 'image',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Scripts Stack
    |--------------------------------------------------------------------------
    |
    | The name of the stack to push scripts
    |
    */

    'scripts_stack' => 'scripts',

    /*
    |--------------------------------------------------------------------------
    | Google Maps API Key
    |--------------------------------------------------------------------------
    |
    | API key to use for map inputs
    |
    */

    'map_api_key' => env('MAP_API_KEY'),
];
