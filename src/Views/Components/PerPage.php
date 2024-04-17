<?php

namespace Javaabu\Forms\Views\Components;

class PerPage extends Component
{
    protected string $view = 'per-page';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $framework = '',
    ) {
        parent::__construct($framework);
    }

}
