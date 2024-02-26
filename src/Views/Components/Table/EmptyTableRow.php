<?php

namespace Javaabu\Forms\Views\Components\Table;

use Javaabu\Forms\Views\Components\Component;

class EmptyTableRow extends Component
{
    protected string $view = 'table.empty-table-row';

    public int $colspan;
    public bool $noCheckbox;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        int $colspan = 1,
        bool $noCheckbox = false,
        string $framework = '',
    )
    {
        parent::__construct($framework);
        $this->colspan = $colspan;
        $this->noCheckbox = $noCheckbox;
    }
}
