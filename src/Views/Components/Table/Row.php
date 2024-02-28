<?php

namespace Javaabu\Forms\Views\Components\Table;

use Javaabu\Forms\Support\HandlesBoundValues;
use Javaabu\Forms\Views\Components\Component;

class Row extends Component
{
    protected string $view = 'table.row';
    public ?string $rowId;
    public ?string $name;
    public ?int $modelId;
    public bool $noCheckbox = false;

    use HandlesBoundValues;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name = null,
        $rowId = null,
        $model = null,
        $modelId = null,
        $noCheckbox = false,
        string $framework = '',
    )
    {
        parent::__construct($framework);

        $this->name = $name;
        $this->rowId = $rowId;
        $this->modelId = $modelId;
        $this->noCheckbox = $noCheckbox;

        $this->bindModel($model);
    }

    public function generateRowId(): void
    {
        if (!$this->rowId) {
            $this->rowId = ($this->name ?? '') . '-' . ($this->modelId ?? rand()) . '-row';
        }
    }

    public function getRowId(): string
    {
        if (!$this->rowId) {
            $this->generateRowId();
        }

        return $this->rowId;
    }

    public function getCheckboxId(): string
    {
        return $this->getRowId() . '-check';
    }

}
