<?php

namespace Javaabu\Forms\Components;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class FormSelect extends Component
{
    use HandlesValidationErrors;
    use HandlesDefaultAndOldValue;

    public string $name;
    public string $label;
    public $options;
    public $selectedKey;
    public bool $multiple;
    public bool $required;
    public bool $inline;
    public bool $floating;
    public string $placeholder;

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
        bool $multiple = false,
        bool $manyRelation = false,
        bool $showErrors = true,
        bool $required = false,
        ?bool $inline = null,
        bool $floating = false,
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->manyRelation = $manyRelation;
        $this->placeholder = $placeholder;

        $inputName = static::convertBracketsToDots(Str::before($name, '[]'));

        if (is_null($default)) {
            $default = $this->getBoundValue($model, $inputName);
        }

        $this->selectedKey = old($inputName, $default);

        if ($this->selectedKey instanceof Arrayable) {
            $this->selectedKey = $this->selectedKey->toArray();
        }

        $this->multiple   = $multiple;
        $this->showErrors = $showErrors;
        $this->floating = $floating;
        $this->required = $required;
        $this->inline = is_null($inline) ? config('forms.inputs.inline') : $inline;
    }

    public function isSelected($key): bool
    {
        return in_array($key, Arr::wrap($this->selectedKey));
    }

    public function nothingSelected(): bool
    {
        return is_array($this->selectedKey) ? empty($this->selectedKey) : is_null($this->selectedKey);
    }
}
