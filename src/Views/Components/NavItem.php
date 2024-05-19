<?php

namespace Javaabu\Forms\Views\Components;

class NavItem extends Component
{
    protected string $view = 'nav-item';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $title,
        public string $url = '#',
        public bool $active = false,
        public bool $disabled = false,
        public bool $isTab = false,
        string $framework = ''
    ) {
        parent::__construct($framework);
    }
}
