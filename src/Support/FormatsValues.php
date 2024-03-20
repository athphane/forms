<?php

namespace Javaabu\Forms\Support;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Javaabu\Forms\FormsDataBinder;

trait FormatsValues
{
    public function isAdminModel(): bool
    {
        return $this->value instanceof Model && method_exists($this->value, 'getAdminLinkAttribute');
    }

    public function formatValue()
    {
        if (is_bool($this->value)) {
            return $this->value ? trans('forms::strings.yes') : trans('forms::strings.no');
        } elseif (empty($this->value)) {
            return trans('forms::strings.blank');
        }

        return $this->value;
    }
}
