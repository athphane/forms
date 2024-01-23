<?php

namespace Javaabu\Forms\Components;

class FormLabel extends Component
{
    public string $label;

    public bool $required;

    public bool $inline;

    public bool $floating;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $label = '',
        bool $required = false,
        bool $inline = false,
        bool $floating = false,
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->label = $label;

        $this->required = $required;

        $this->inline = $inline;

        $this->floating = $floating;
    }
}
