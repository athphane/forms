<?php

namespace Javaabu\Forms\Views\Components;

use Illuminate\Database\Eloquent\Model;
use Javaabu\Forms\Support\HandlesBoundValues;

class TextEntry extends Component
{
    use HandlesBoundValues;

    protected string $view = 'text-entry';
    public bool $inline;
    public string $label;
    public string $name;
    public $value;
    public $model;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name = '',
        string $label = '',
        $value = null,
        $model = null,
        ?bool $inline = null,
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->label = $label;
        $this->inline = is_null($inline) ? config('forms.inputs.inline') : $inline;
        $this->name = $name;
        $this->value = $value ?: ($name ? $this->getBoundValue($model, $name) : '');
    }

    public function isAdminModel(): bool
    {
        return $this->value instanceof Model && method_exists($this->value, 'getAdminLinkAttribute');
    }
}
