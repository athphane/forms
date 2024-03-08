<?php

namespace Javaabu\Forms\Views\Components;

use Illuminate\Database\Eloquent\Model;
use Javaabu\Forms\Support\HandlesBoundValues;

class BooleanEntry extends TextEntry
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name = '',
        string $label = '',
        $value = null,
        $model = null,
        bool $showLabel = true,
        bool $inline = false,
        string $framework = ''
    )
    {
        parent::__construct(
            $name,
            label: $label,
            value: $value,
            model: $model,
            showLabel: $showLabel,
            inline: $inline,
            multiline: false,
            framework: $framework
        );

        if (is_null($this->value)) {
            $this->value = trans('forms::strings.blank');
        } else {
            $this->value = $this->value ? trans('forms::strings.yes') : trans('forms::strings.no');
        }
    }
}
