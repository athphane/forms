<?php

namespace Javaabu\Forms\Views\Components;

class FilterSubmit extends Component
{
    protected string $view = 'filter-submit';

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
