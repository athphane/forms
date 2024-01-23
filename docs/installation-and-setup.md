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
// TODO
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
