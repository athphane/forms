<?php

namespace Javaabu\Forms\Views\Components\Table;

use Javaabu\Forms\Support\HandlesBoundValues;
use Javaabu\Forms\Views\Components\Component;

class Row extends Component
{
    protected string $view = 'table.row';

    use HandlesBoundValues;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $model = null,
        string $framework = '',
    )
    {
        parent::__construct($framework);

        $this->bindModel($model);
    }
}
