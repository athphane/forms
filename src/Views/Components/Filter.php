<?php

namespace Javaabu\Forms\Views\Components;

use Illuminate\Support\Str;

class Filter extends Component
{
    protected string $view = 'filter';

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
