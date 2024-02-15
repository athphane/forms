<?php

namespace Javaabu\Forms\Views\Components;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Contracts\Database\Eloquent\Builder as BuilderContract;
use Javaabu\Forms\Support\HandlesDefaultAndOldValue;
use Javaabu\Forms\Support\HandlesValidationErrors;

class Select extends Component
{
    use HandlesValidationErrors;
    use HandlesDefaultAndOldValue;

    protected string $view = 'select';

    public string $name;
    public string $label;
    public $options;
    public $selectedKey;
    public bool $multiple;
    public bool $required;
    public bool $inline;
    public bool $floating;
    public string $placeholder;
    public bool $isSelect2;
    public string $nameField;
    public string $idField;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        string $placeholder = '',
               $options = [],
               $model = null,
               $default = null,
        bool   $multiple = false,
        bool   $relation = false,
        bool   $showErrors = true,
        bool   $required = false,
        ?bool  $inline = null,
        bool   $floating = false,
        bool   $isSelect2 = false,
        string $nameField = '',
        string $idField = '',
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->name = $name;
        $this->label = $label;
        $this->nameField = $nameField;
        $this->idField = $idField;
        $this->isSelect2 = $isSelect2;
        $this->options = $options instanceof BuilderContract ? $this->getOptionsFromQueryBuilder($options) : $options;
        $this->relation = $relation;
        $this->placeholder = $placeholder;

        $inputName = static::convertBracketsToDots(Str::before($name, '[]'));

        if (is_null($default)) {
            $default = $this->getBoundValue($model, $inputName);
        }

        if ($default instanceof Model) {
            $default = $default->getKey();
        }

        $this->selectedKey = old($inputName, $default);

        if ($this->selectedKey instanceof Arrayable) {
            $this->selectedKey = $this->selectedKey->toArray();
        }

        $this->multiple   = $multiple;
        $this->showErrors = $showErrors;
        $this->floating = $floating;
        $this->required = $required;
        $this->inline = is_null($inline) ? config('forms.inputs.inline') : $inline;
    }

    public function getOptionsFromQueryBuilder(BuilderContract $query): array
    {
        $model = $query->getModel();

        $name_field = $this->nameField ?: 'name';
        $id_field = $this->idField ?: ($model instanceof Model && $model->getKeyName() ? $model->getKeyName() : 'id');
        $is_accessor = false;

        if ($model instanceof Model) {

            $is_accessor = $model->hasAttributeMutator($name_field) ||
                           $model->hasGetMutator($name_field) ||

                           $model->hasAttributeMutator($id_field) ||
                           $model->hasGetMutator($id_field);
        }

        if ($is_accessor) {
            return $query->get()
                         ->pluck($name_field, $id_field)
                         ->all();
        }

        return $query->pluck($name_field, $id_field)->all();
    }

    public function isSelected($key): bool
    {
        return in_array($key, Arr::wrap($this->selectedKey));
    }

    public function nothingSelected(): bool
    {
        return is_array($this->selectedKey) ? empty($this->selectedKey) : is_null($this->selectedKey);
    }
}
