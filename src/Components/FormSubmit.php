<?php

namespace Javaabu\Forms\Components;

class FormSubmit extends FormButton
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $color = 'primary',
        string $framework = ''
    )
    {
        parent::__construct('submit', $color, $framework);
    }
}
