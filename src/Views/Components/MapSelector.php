<?php

namespace Javaabu\Forms\Views\Components;

use Illuminate\Support\Arr;

class MapSelector extends Input
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        public string $latName = 'lat',
        public string $lngName = 'lng',
        public string $radiusName = 'radius',
        public string $polygonName = 'boundary',
        public bool $disabled = false,
        public bool $enableCoordinates = true,
        public bool $hideInputs = false,
        string $label = '',
        $model = null,
        bool $showErrors = true,
        bool $showLabel = true,
        bool $required = false,
        bool $inline = false,
        string $framework = ''
    ) {
        parent::__construct(
            $name,
            label: $label,
            type: 'file',
            model: $model,
            showErrors: $showErrors,
            showLabel: $showLabel,
            required:$required,
            inline: $inline,
            floating: false,
            framework: $framework
        );
    }
}
