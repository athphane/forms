<?php

namespace Javaabu\Forms\Components;

class FormButton extends Component
{
    protected string $view = 'form-button';

    public string $type;
    public string $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $type = '',
        string $color = 'primary',
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->type = $type;
        $this->color = $color;
    }
}
