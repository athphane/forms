---
title: Introduction
sidebar_position: 1.0
---

# Forms

:::danger

This package is currently under development. If anything works, that's a surprise.

:::

[Forms](https://github.com/Javaabu/forms) provide Laravel Blade components for form elements. 

This package was inspired from [protonemedia/laravel-form-components](https://github.com/protonemedia/laravel-form-components)

Here's a quick example of what this package can offer.

```html
<x-forms::form :model="$page">
    <x-forms::input name="title" :label="__('Title')" />
    <x-forms::textarea name="content" :label="__('Content')" />
</x-forms::form>
```
