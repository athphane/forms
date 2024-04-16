<?php

namespace Javaabu\Forms\Tests\Feature;

use Javaabu\Forms\Tests\TestCase;

class ConditionalWrapperTest extends TestCase
{
    /** @test */
    public function it_can_render_conditional_wrapper()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('conditional-wrapper');

        $this->visit('/conditional-wrapper')
            ->seeElement('div[data-enable-elem="#"]');
    }

    /** @test */
    public function it_can_generate_material_admin_26_conditional_wrapper()
    {
        $this->setFrameworkMaterialAdmin26();
        $this->registerTestRoute('conditional-wrapper');

        $this->visit('/conditional-wrapper')
            ->seeElement('div[data-enable-elem="#"]');
    }
}
