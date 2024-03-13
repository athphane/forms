<?php

namespace Javaabu\Forms\Tests\Feature\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

enum ArticleStatuses: string {
    case Draft = 'draft';
    case Published = 'published';
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
