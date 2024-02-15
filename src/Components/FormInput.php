<?php

namespace Javaabu\Forms\Components;

class FormInput extends Component
{
    use HandlesValidationErrors;
    use HandlesDefaultAndOldValue;

    protected string $view = 'form-input';
    public string $name;
    public string $label;
    public string $type;
    public bool $required;
    public bool $inline;
    public bool $floating;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        string $type = 'text',
        $model = null,
        $default = null,
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
        $this->type = $type;
        $this->showErrors = $showErrors;
        $this->floating = $floating;
        $this->required = $required;
        $this->inline = is_null($inline) ? config('forms.inputs.inline') : $inline;

        $this->setValue($name, $model, $default);
    }
}
