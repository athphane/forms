<?php

namespace Javaabu\Forms\Components;

class FormFilter extends Component
{
    protected string $view = 'form-filter';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $framework = '',
    )
    {
        parent::__construct($framework);
    }
}
