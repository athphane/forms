<?php

namespace Javaabu\Forms\Views\Components;

use Illuminate\Support\Arr;
use Javaabu\Forms\Support\HandlesMediaValues;
use Javaabu\Helpers\Media\AllowedMimeTypes;

class File extends Input
{
    use HandlesMediaValues;

    public array $fileTypes;
    public array $mimeTypes;
    public string $collection;
    public string $conversion;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        string|array $type = 'document',
        null|string|array $mimeTypes = null,
        string $collection = '',
        string $conversion = '',
        $model = null,
        $default = null,
        bool $showErrors = true,
        bool $showLabel = true,
        bool $required = false,
        bool $inline = false,
        string $framework = ''
    ) {
        $this->collection = $collection ?: $name;
        $this->conversion = $conversion;
        $this->fileTypes = Arr::wrap($type);
        $this->mimeTypes = $mimeTypes ? Arr::wrap($mimeTypes) : AllowedMimeTypes::getAllowedMimeTypes($this->fileTypes);

        parent::__construct(
            $name,
            label: $label,
            type: 'file',
            model: $model,
            default: $default,
            showErrors: $showErrors,
            showLabel: $showLabel,
            required:$required,
            inline: $inline,
            floating: false,
            framework: $framework
        );
    }
}
