<?php

namespace Javaabu\Forms\Views\Components\Table;

use Javaabu\Forms\Views\Components\Component;

class Cell extends Component
{
    protected string $view = 'table.cell';

    public bool $heading;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        bool $heading = false,
        string $framework = '',
    )
    {
        parent::__construct($framework);
        $this->heading = $heading;
    }
}
