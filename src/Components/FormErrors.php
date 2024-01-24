<?php

namespace Javaabu\Forms\Components;

use Illuminate\Support\Str;

class FormErrors extends Component
{
    public string $name;
    public string $bag;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name = '',
        string $bag = 'default',
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->name = static::convertBracketsToDots(Str::before($name, '[]'));

        $this->bag = $bag;
    }
}
