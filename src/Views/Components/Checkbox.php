<?php

namespace Javaabu\Forms\Views\Components;

use Javaabu\Forms\Support\HandlesDefaultAndOldValue;
use Javaabu\Forms\Support\HandlesValidationErrors;

class Checkbox extends Component
{
    use HandlesValidationErrors;
    use HandlesDefaultAndOldValue;

    protected string $view = 'checkbox';
    public string $name;
    public string $label;
    public string $type;
    public bool $required;
    public bool $floating;
    public bool $checked;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        string $type = 'checkbox',
        $model = null,
        $default = null,
        bool $showErrors = true,
        bool $required = false,
        bool $floating = false,
        bool $checked = false,
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
        $this->checked = $checked;

        $this->setValue($name, $model, $default);
    }
}
