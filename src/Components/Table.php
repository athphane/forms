<?php

namespace Javaabu\Forms\Components;

class Table extends Component
{
    public bool $striped;
    public bool $no_bulk;

    public string $model;
    public string $table_class;
    public ?string $filter_id;

    public bool $no_pagination;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $framework = '',
        bool   $striped = false,
        bool   $no_bulk = false,
        string $model = '',
        string $table_class = '',
        string $filter_id = null,
        bool $no_pagination = false,
    )
    {
        parent::__construct($framework);
        $this->striped = $striped;
        $this->no_bulk = $no_bulk;
        $this->model = $model;
        $this->table_class = $table_class;
        $this->filter_id = $filter_id;
        $this->no_pagination = $no_pagination;
    }
}
