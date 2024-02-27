<?php

namespace Javaabu\Forms\Tests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

trait InteractsWithDatabase
{
    protected function runMigrations(): void
    {
        include_once __DIR__ . '/Feature/database/create_activities_table.php';

        (new \CreateActivitiesTable())->up();
    }
}
