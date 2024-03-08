<?php

namespace Javaabu\Forms\Views\Components;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Select2 extends Select
{
    public bool $isAjax;
    public bool $tags;
    public bool $allowClear;
    public bool $isFirst;
    public bool $hideSearch;
    public string $child;
    public string $ajaxUrl;
    public string $filterField;
    public string $fallback;
    public string $parentModal;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
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
        bool   $isAjax = false,
        bool   $isFirst = false,
        bool   $tags = false,
        bool   $hideSearch = false,
        bool   $allowClear = true,
        string $child = '',
        string $ajaxUrl = '',
        string $nameField = '',
        string $idField = '',
        string $filterField = '',
        string $fallback = '',
        string $parentModal = '',
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

        $this->isAjax = $isAjax;
        $this->isFirst = $isFirst;
        $this->child = $child;
        $this->ajaxUrl = $ajaxUrl;
        $this->filterField = $filterField;
        $this->tags = $tags;
        $this->hideSearch = $hideSearch;
        $this->allowClear = $allowClear;
        $this->fallback = $fallback;
        $this->parentModal = $parentModal;
    }

    /**
     * Get the default nothing selected text
     */
    public function getNothingSelectedText(): string
    {
        return trans(config('forms.inputs.nothing_selected_text'));
    }
}
