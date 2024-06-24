---
title: Installation & Setup
sidebar_position: 1.2
---

You can install the package via composer:

```bash
composer require javaabu/forms
```

# Publishing the config file

Publishing the config file is optional:

```bash
php artisan vendor:publish --provider="Javaabu\Forms\FormsServiceProvider" --tag="forms-config"
```

This is the default content of the config file:

```php
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
];

```

# Publishing the component views

If you want to override the generated markup for the form components, you can publish the components and modify them:

```php
php artisan vendor:publish --provider="Javaabu\Forms\FormsServiceProvider" --tag="forms-views"
```

The view files will be available in the `resources/views/vendor/forms` directory after you publish them.

# Publishing translations

If you want to override the required * in labels, you can publish the language files and modify them:

```php
php artisan vendor:publish --provider="Javaabu\Forms\FormsServiceProvider" --tag="forms-translations"
```

The language files will be available in the `lang/vendor/forms` directory after you publish them.
