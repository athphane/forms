<?php

namespace Javaabu\Forms\Views\Components;

class Textarea extends Input
{
    protected string $view = 'textarea';

    public int $rows;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        int $rows = 3,
        $model = null,
        $default = null,
        $value = null,
        bool $showErrors = true,
        bool $showLabel = true,
        bool $required = false,
        bool $inline = false,
        bool $floating = false,
        string $framework = ''
    ) {
        parent::__construct(
            $name,
            label: $label,
            type: 'textarea',
            model: $model,
            default: $default,
            showErrors: $showErrors,
            showLabel: $showLabel,
            required:$required,
            inline: $inline,
            floating: $floating,
            framework: $framework
        );

        $this->rows = $rows;

        if (! is_null($value)) {
            $this->value = $value;
        }
    }
}
