<?php

namespace Javaabu\Forms\Components;

class Table extends Component
{
    public bool $striped;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $framework = '',
        bool   $striped = false,
    )
    {
        parent::__construct($framework);
        $this->striped = $striped;
    }
}
