<?php

namespace Javaabu\Forms\Components;

class FormHelp extends Component
{
    public string $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $text = '',
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->text = $text;
    }
}
