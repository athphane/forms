<?php

namespace Javaabu\Forms\Views\Components;

class Time extends Date
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
        string $icon = 'zmdi zmdi-clock',
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
            'time',
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
        return 'time-picker';
    }
}
