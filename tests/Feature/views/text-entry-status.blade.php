@php
    $article = new \Javaabu\Forms\Tests\Feature\Models\Article();
    $article->status = \Javaabu\Forms\Tests\Feature\Models\ArticleStatuses::Published;
@endphp

@model($article)
<x-forms::text-entry name="status" />
@endmodel
