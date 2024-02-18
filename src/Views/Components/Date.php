<?php

namespace Javaabu\Forms\Views\Components;

class Date extends Input
{
    public string $icon;
    public string $clearIcon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        string $type = 'date',
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
            $type,
            $model,
            $default,
            $showErrors,
            $required,
            $inline,
            $floating,
            $framework
        );

        $this->icon = $icon;
        $this->clearIcon = $clearIcon;
    }

    public function datePickerClass(): string
    {
        return 'date-picker';
    }

    public function isDateInput(): bool
    {
        return true;
    }
}
