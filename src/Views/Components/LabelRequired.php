<?php

namespace Javaabu\Forms\Views\Components;

class LabelRequired extends Component
{
    protected string $view = 'label-required';

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

        if (! $text) {
             $text = __(config('forms.inputs.required_text'));
        }

        $this->text = $text;
    }
}
