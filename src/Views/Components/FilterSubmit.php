<?php

namespace Javaabu\Forms\Views\Components;

class FilterSubmit extends Component
{
    protected string $view = 'filter-submit';
    public string $cancelUrl;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $cancelUrl,
        string $framework = '',

    )
    {
        parent::__construct($framework);
        $this->cancelUrl = $cancelUrl;
    }

}
