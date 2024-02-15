<?php

use Javaabu\Forms\Components;

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
        'inline' => false,

        'required_text' => 'forms::strings.required_text',

        'nothing_selected_text' => 'forms::strings.nothing_selected'
    ],

    'components' => [


        /*

        'form-input-group' => [
            'view'  => 'forms::{framework}.form-input-group',
            'class' => Components\FormInputGroup::class,
        ],

        'form-input-group-text' => [
            'view'  => 'forms::{framework}.form-input-group-text',
            'class' => Components\FormInputGroupText::class,
        ],



        'form-radio' => [
            'view'  => 'forms::{framework}.form-radio',
            'class' => Components\FormRadio::class,
        ],

        'form-range' => [
            'view'  => 'forms::{framework}.form-range',
            'class' => Components\FormRange::class,
        ],




        */
    ],
];
