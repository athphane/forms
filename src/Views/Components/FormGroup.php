<?php

namespace Javaabu\Forms\Views\Components;

class FormGroup extends Component
{
    protected string $view = 'form-group';
    public string $name;
    public string $label;
    public bool $required;
    public bool $inline;
    public bool $floating;
    public bool $wrap;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name = '',
        string $label = '',
        bool   $required = false,
        bool   $inline = false,
        bool   $floating = false,
        bool   $wrap = true,
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->name = $name;
        $this->label = $label;
        $this->required = $required;
        $this->inline = $inline;
        $this->floating = $floating;
        $this->wrap = $wrap;
    }
}
