<?php

namespace Javaabu\Forms\Views\Components;

class ConditionalWrapper extends Component
{
    protected string $view = 'conditional-wrapper';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $enableElem,
        public        $enableValue,
        public bool   $hideFields = false,
        public bool $disable = false,
        string $framework = ''
    ) {
        parent::__construct($framework);
    }
}
