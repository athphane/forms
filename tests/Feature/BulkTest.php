<?php

namespace Javaabu\Forms\Tests\Feature;

use Javaabu\Forms\Tests\TestCase;

class BulkTest extends TestCase
{
    /** @test */
    public function it_can_generated_bulk_actions_for_material_admin_26()
    {
        $this->setFrameworkMaterialAdmin26();
        $this->registerTestRoute('bulk-actions');

        $this->visit('/bulk-actions')
            ->seeElement('select')
            ->seeElement('option[value="approve"]')
            ->seeElement('option[value="ban"]')
            ->seeElement('option[value="delete"]');

    }
}
