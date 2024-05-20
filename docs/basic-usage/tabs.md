---
title: Tabs
sidebar_position: 5
---

You can use the `tabs` component to render JavaScript tabs. The `tabs` component requires an array or Collection of tabs. Optionally you can pass also pass in the name of the tab to be active. By default, the first tab will be marked as active. The content for each tab can be passed as named slots with the slot names same as the name of the tab in kebab case.

```php
$items = [
    [
        'name' => 'home'
    ],
    [
        'name'     => 'profile',
        'title'    => __('Profile'),
    ],  
    [
        'name'     => 'contact',        
        'disabled' => true,
    ],
    [
        'name'     => 'external-tab',
        'url'      => 'http://example.com',
    ],
];
```

```html
<x-forms::tabs :tabs="$items" active="profile">
    <x-slot:home>
        ...
    </x-slot:home>

    <x-slot:profile>
        ...
    </x-slot:profile>

    <x-slot:contact>
        ...
    </x-slot:contact>
</x-forms::tabs>
```

The tab items support the following values:
- `'name'` - (Required) The name of the tab. Preferrably, in kebab case. Will be used as the id of the tab pane.
- `'title'` - The title of the tab use in the tab link. If not provided, the title will be generated using the `name`.
- `'disabled'` - Whether the tab should be disabled.
- `'url''` - If you want to link to an actual url instead of a tab.
