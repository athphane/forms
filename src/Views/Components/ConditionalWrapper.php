<?php

namespace Javaabu\Forms\Views\Components;

use Illuminate\Database\Eloquent\Model;
use Javaabu\Forms\Support\FormatsValues;
use Javaabu\Forms\Support\HandlesBoundValues;

class ConditionalWrapper extends Component
{
    protected string $view = 'conditional-wrapper';
    public string $reference;
    public array $values;
    public bool $json;
    public bool $withWrapper;
    public bool $hideFields;
    public bool $reverse;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $reference = '#',
        array $values = [],
        bool $json = false,
        bool $withWrapper = true,
        bool $hideFields = true,
        bool $reverse = false,
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->reference = $reference;
        $this->values = $values;
        $this->json = $json;
        $this->withWrapper = $withWrapper;
        $this->hideFields = $hideFields;
        $this->reverse = $reverse;
    }
}
