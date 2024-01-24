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

        'required_text' => 'forms::strings.required_text'
    ],

    'components' => [
        'form' => [
            'view'  => 'forms::{framework}.form',
            'class' => Components\Form::class,
        ],

        'form-required' => [
            'view'  => 'forms::{framework}.form-required',
            'class' => Components\FormRequired::class,
        ],

        'form-label' => [
            'view'  => 'forms::{framework}.form-label',
            'class' => Components\FormLabel::class,
        ],

        'form-help' => [
            'view'  => 'forms::{framework}.form-help',
            'class' => Components\FormHelp::class,
        ],

        'form-group' => [
            'view'  => 'forms::{framework}.form-group',
            'class' => Components\FormGroup::class,
        ],

        'form-errors' => [
            'view'  => 'forms::{framework}.form-errors',
            'class' => Components\FormErrors::class,
        ],

        'form-input' => [
            'view'  => 'forms::{framework}.form-input',
            'class' => Components\FormInput::class,
        ],

        'form-text' => [
            'view'  => 'forms::{framework}.form-input',
            'class' => Components\FormText::class,
        ],

        'form-number' => [
            'view'  => 'forms::{framework}.form-input',
            'class' => Components\FormNumber::class,
        ],

        'form-tel' => [
            'view'  => 'forms::{framework}.form-input',
            'class' => Components\FormTel::class,
        ],

        'form-password' => [
            'view'  => 'forms::{framework}.form-input',
            'class' => Components\FormPassword::class,
        ],

        'form-email' => [
            'view'  => 'forms::{framework}.form-input',
            'class' => Components\FormEmail::class,
        ],

        'form-url' => [
            'view'  => 'forms::{framework}.form-input',
            'class' => Components\FormUrl::class,
        ],

        'form-hidden' => [
            'view'  => 'forms::{framework}.form-input',
            'class' => Components\FormHidden::class,
        ],

        'form-textarea' => [
            'view'  => 'forms::{framework}.form-textarea',
            'class' => Components\FormTextarea::class,
        ],

        /*


        'form-checkbox' => [
            'view'  => 'forms::{framework}.form-checkbox',
            'class' => Components\FormCheckbox::class,
        ],







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

        'form-select' => [
            'view'  => 'forms::{framework}.form-select',
            'class' => Components\FormSelect::class,
        ],

        'form-submit' => [
            'view'  => 'forms::{framework}.form-submit',
            'class' => Components\FormSubmit::class,
        ],


        */
    ],
];
