<?php

namespace Javaabu\Forms\Views\Components;

class NoItems extends Component
{
    protected string $view = 'no-items';

    public string $model;
    public string $createAction;
    public string $modelType;
    public string $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $model,
        string $createAction,
        string $modelType,
        string $icon,
        string $framework = '',
    )
    {
        parent::__construct($framework);

        $this->model = $model;
        $this->createAction = $createAction;
        $this->modelType = $modelType;
        $this->icon = $icon;
    }
}
