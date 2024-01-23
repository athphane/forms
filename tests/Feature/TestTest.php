<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Http\Request;
use Javaabu\Forms\Tests\TestCase;

class TestTest extends TestCase
{
    /** @test */
    public function it_can_run_a_test()
    {
        $this->registerTestRoute('test');

        $this->visit('/test')
            ->seeInElement('h1', 'Test Works');
    }
}
