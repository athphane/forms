<?php

namespace Javaabu\Forms\Views\Components\Table;

use Javaabu\Forms\Views\Components\Component;

class Row extends Component
{
    protected string $view = 'table.row';

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
