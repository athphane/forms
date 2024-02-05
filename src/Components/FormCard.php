<?php

namespace Javaabu\Forms\Components;

class FormCard extends Component
{
    public string $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $title,
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->title = $title;
    }
}
