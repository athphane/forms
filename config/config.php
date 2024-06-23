<?php

return [
    'prefix' => '',

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
    | Default Input Settings
    |--------------------------------------------------------------------------
    |
    | Controls the default settings for rendering form controls
    |
    */

    'inputs' => [
        'required_text' => 'forms::strings.required_text',

        'nothing_selected_text' => 'forms::strings.nothing_selected',
    ],

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
            'file-clear-icon' => 'close'
        ],

        'material-admin-26' => [
            'icon-prefix' => 'zmdi',
            'date-icon' => 'calendar',
            'datetime-icon' => 'calendar',
            'time-icon' => 'clock',
            'date-clear-icon' => 'close',
            'date-clear-btn-class' => 'text-body btn-date-clear disable-w-input',
            'file-download-icon' => 'open-in-new',
            'file-clear-icon' => ''
        ]

    ],
];
