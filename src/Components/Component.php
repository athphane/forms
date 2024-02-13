<?php

namespace Javaabu\Forms\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component as BaseComponent;
use Javaabu\Forms\FormsDataBinder;

abstract class Component extends BaseComponent
{
    /**
     * ID for this component.
     *
     * @var string
     */
    private $id;

    /**
     * Framework used for this component
     *
     * @var string
     */
    public string $framework;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $framework = '')
    {
        if (! $framework) {
            $framework = config('forms.framework');
        }

        $this->framework = $framework;
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $alias = Str::kebab(class_basename($this));

        $config = config("forms.components.{$alias}");

        $framework = $this->framework;

        return str_replace('{framework}', $framework, $config['view']);
    }

    /**
     * Generates an ID, once, for this component.
     *
     * @return string
     */
    public function id(): string
    {
        if ($this->id) {
            return $this->id;
        }

        if ($this->name) {
            return $this->id = $this->generateIdByName();
        }

        return $this->id = Str::random(4);
    }

    /**
     * Generates an ID by the name attribute.
     *
     * @return string
     */
    protected function generateIdByName(): string
    {
        return str_replace(['[', ']'], ['-', ''], Str::before($this->name, '[]'));
    }

    /**
     * Converts a bracket-notation to a dotted-notation
     *
     * @param string $name
     * @return string
     */
    protected static function convertBracketsToDots(string $name): string
    {
        return str_replace(['[', ']'], ['.', ''], $name);
    }
}
