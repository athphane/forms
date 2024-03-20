<?php

namespace Javaabu\Forms\Views\Components;

class IconPicker extends Select
{
    public string|null $iconPrefix;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string|null $iconPrefix = null,
        string $label = '',
        string $placeholder = '',
               $options = [],
               $model = null,
               $default = null,
        bool   $multiple = false,
        bool   $relation = false,
        bool   $showErrors = true,
        bool   $showLabel = true,
        bool   $required = false,
        bool   $allowClear = true,
        string $nameField = '',
        string $idField = '',
        bool $inline = false,
        bool $floating = false,
        string $framework = ''
    )
    {
        if ($allowClear && empty($placeholder)) {
            $placeholder = $this->getNothingSelectedText();
        }

        parent::__construct(
            $name,
            label: $label,
            placeholder: $placeholder,
            options: $options,
            model: $model,
            default: $default,
            multiple: $multiple,
            relation: $relation,
            showErrors: $showErrors,
            showLabel: $showLabel,
            required: $required,
            inline: $inline,
            floating: $floating,
            isSelect2: true,
            nameField: $nameField,
            idField: $idField,
            framework: $framework
        );

        $this->iconPrefix = $iconPrefix;
    }

    /**
     * Get the default nothing selected text
     */
    public function getNothingSelectedText(): string
    {
        return trans(config('forms.inputs.nothing_selected_text'));
    }
}
