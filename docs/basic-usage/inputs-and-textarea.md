---
title: Input and textarea elements
---

The minimum requirement for an `input` or `textarea` is the `name` attribute.

```html
<x-forms::input name="company_name" />
```

Optionally you can add a `label` attribute, which can be computed as well.

```html
<x-forms::input name="company_name" label="Company name" />
<x-forms::input name="company_name" :label="__('Company name')" />
```

You can also choose to use a `placeholder` instead of a label, and of course you can change the `type` of the element.

```html
<x-forms::input type="email" name="current_email" placeholder="Current email address" />
```

By default, every element shows validation errors, but you can hide them if you want.

```html
<x-forms::textarea name="description" :show-errors="false" />
```

By default, the input will be rendered inside a form group.
You can display the `label` either inline or as a floating label using the `inline` and `floating` attributes. 

```html
<x-forms::input name="company_name" label="Company name" inline />
<x-forms::input name="company_name" label="Company name" floating />
```

If you want to hide the label and not wrap the input inside a form group, you can hide the label:

```html
<x-forms::textarea name="description" :show-label="false" />
```

You can mark an input as required using the `required` attribute.
This will also add an `*` to the input label.

```html
<x-forms::input name="company_name" label="Company name" required />
```

To change the `*` to some other text such as `(Required)`, you can publish the package translations and edit the `strings.php` language file.

```php
...
'required_text' => '(Required)',
...
```

The `input` element will default to `text` input.
For convenience, components for other HTML5 input types are also included which are just extensions of the `input` component.
The included input types are given below.

```html
<x-forms::text name="text" />
<x-forms::password name="password" />
<x-forms::number name="number" />
<x-forms::hidden name="hidden" />
<x-forms::email name="email" />
<x-forms::url name="url" />
<x-forms::tel name="tel" />
```
