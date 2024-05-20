---
title: Model Binding and Default Values
sidebar_position: 2
---

You can use the `default` attribute to specify the default value of the element.

```html
<x-forms::textarea name="motivation" default="I want to use this package because..." />
```

# Binding a target

Instead of setting a default value, you can also pass in a target, like an Eloquent model. Now the component will get the value from the target by the `name`.

```html
<x-forms::textarea name="description" :model="$video" />
```

In the example above, where `$video` is an Eloquent model, the default value will be `$video->description`.

# Binding a form

Instead of binding individual elements, you can bind a whole form.

```html
<x-forms::form :model="$video">
    <x-forms::input name="title" />
    <x-forms::textarea name="description" />
</x-forms::form>
```

In the example above, the elements inside the form will be bound to the `$video` Eloquent model.
The default value of the `title` text input will be `$video->title` and the default value of the `description` textarea will be `$video->description`.

# Binding a target to multiple elements

You can also bind a target by using the `@model` directive. This will bind the target to all elements until the `@endmodel` directive.


```html
<div>
    @model($video)
        <x-forms::input name="title" />
        <x-forms::textarea name="description" />
    @endmodel
</div>
```

You can even mix targets!

```html
<x-forms::form>
    @model($user)
        <x-forms::input name="full_name" label="Full name" />

        @model($userProfile)
            <x-forms::textarea name="biography" label="Biography" />
        @endmodel

        <x-forms::input name="email" label="Email address" />
    @endmodel
</x-forms::form>
```

# Override or remove a binding

You can override the `@model` directive by passing a target directly to the element using the `:model` attribute.
If you want to remove a binding for a specific element, pass in false.

```html
<x-forms::form>
    @model($video)
        <x-forms::input name="title" label="Title" />
        <x-forms::input :model="$videoDetails" name="subtitle" label="Subtitle" />
        <x-forms::textarea :model="false" name="description" label="Description" />
    @endmodel
</x-forms::form>
```
