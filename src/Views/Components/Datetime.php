<?php

namespace Javaabu\Forms\Views\Components;

class Datetime extends Date
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        $model = null,
        $default = null,
        string $icon = 'zmdi zmdi-calendar',
        string $clearIcon = 'zmdi zmdi-close',
        bool $showErrors = true,
        bool $required = false,
        ?bool $inline = null,
        bool $floating = false,
        string $framework = ''
    )
    {
        parent::__construct(
            $name,
            $label,
            'datetime',
            $model,
            $default,
            $icon,
            $clearIcon,
            $showErrors,
            $required,
            $inline,
            $floating,
            $framework
        );
    }

    public function datePickerClass(): string
    {
        return 'datetime-picker';
    }
}
