<?php

namespace Javaabu\Forms\Support;

use Illuminate\Database\Eloquent\Model;

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
