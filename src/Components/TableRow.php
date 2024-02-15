<?php

namespace Javaabu\Forms\Components;

class TableRow extends Component
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
