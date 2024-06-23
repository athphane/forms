---
title: File Inputs
sidebar_position: 7
---

This component renders a [`jasny-bootstrap`](https://www.jasny.net/bootstrap) [`fileinput.js`](https://www.jasny.net/bootstrap/components/#fileinput) powered file input that supports [`spatie/laravel-medialibrary`](https://spatie.be/docs/laravel-medialibrary). This component requires `spatie/laravel-medialibrary`.


```html
<x-forms::form :model="$article">
    <x-forms::file name="attachment" type="document" />
</x-forms::form>
```

File inputs supports the following attributes:
- `'name'` - (Required) The name of the file input.
- `'label'` - The input label. If not provided, will be auto generated using the name.
- `'type'` - The file type or an array of types from `AllowedMimetypes` from [`javaabu/helpers`](https://github.com/Javaabu/helpers). Defaults to `'document'`.
- `'mimetypes'` - An array or single allowed mimetype. If not provided, the given `type` will be used to determine the allowed mimetypes. Used in the `accept` attribute of the file input.
- `'extensions'` - An array or single allowed extension. If not provided, the given `type` will be used to determine the allowed extensions. Used in the file hint.
- `'max-size'` - The maximum allowed file size in KB. If not provided, the given `type` will be used to determine the allowed size. Used in the file hint.
- `'collection'` - The media collection name when using `laravel-medialibrary`. By default, the `name` is used as the collection name.
- `'conversion'` - `laravel-medialibrary` media conversion to use for the displayed file url. By default, no conversion is used.
- `'file-input-class'` - Additional CSS class to use on the fileinput div.
- `'clear-icon'` - Icon to use on the clear file button. By default, uses the framework specific icon from config.
- `'download-icon'` - Icon to use on the download file button. By default, uses the framework specific icon from config.
- `'model'` - The model to bind to. By default, uses the currently bound model.
- `'default'` - The default file url or Media object. Can be used to manually set a value to the file input.
- `'show-hint'` - Whether to show a help text that shows the allowed file extensions and the max file size. `true` by default. To display a custom message, can use the `help` slot.
- `'show-errors'` - Whether to show any associated validation errors. `true` by default.
- `'show-label'` - Whether to show the input label. `true` by default. If `false` the component will be rendered without a `form-group`.
- `'required'` - Whether the input is required. `false` by default.
- `'disabled'` - Whether the input is disabled. `false` by default.
- `'inline'` - Whether to dispaly the label inline. `false` by default.
- `'framework'` - Which CSS framework to use. Defaults to the framework set in config.
