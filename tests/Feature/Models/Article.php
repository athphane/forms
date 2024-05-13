<?php

namespace Javaabu\Forms\Tests\Feature\Models;

use Illuminate\Database\Eloquent\Model;

enum ArticleStatuses: string
{
    case Draft = 'draft';
    case Published = 'published';

    public function getColor(): string
    {
        return match ($this) {
            self::Draft => 'danger',
            self::Published => 'success'
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::Draft => 'Draft',
            self::Published => 'Published'
        };
    }
}

class Article extends Model
{
    protected $fillable = [
        'status',
    ];

    protected $casts = [
        'status' => ArticleStatuses::class,
    ];
}
