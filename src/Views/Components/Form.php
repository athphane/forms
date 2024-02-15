<?php

namespace Javaabu\Forms\Views\Components;

use Javaabu\Forms\Support\HandlesBoundValues;

class Form extends Component
{
    use HandlesBoundValues;

    protected string $view = 'form';

    /**
     * Request method.
     */
    public string $method;

    /**
     * Form method spoofing to support PUT, PATCH and DELETE actions.
     * https://laravel.com/docs/master/routing#form-method-spoofing
     */
    public bool $spoofMethod = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $method = 'POST',
        $model = null,
        string $framework = ''
    )
    {
        parent::__construct($framework);

        $this->bindModel($model);

        $this->method = strtoupper($method);

        $this->spoofMethod = in_array($this->method, ['PUT', 'PATCH', 'DELETE']);
    }
}
