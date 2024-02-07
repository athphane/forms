<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Javaabu\Forms\Tests\TestCase;

class FormFilterTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Config::set('forms.inputs.required_text', 'forms::strings.required_text');
        Config::set('forms.inputs.inline', false);
    }

    /** @test */
    public function it_can_generate_bootstrap_5_form_filter_hidden_fields()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-filter');

        $this->visit('/form-filter')
            ->seeElement('input[type="hidden"][name="test"]')
            ->seeElement('input[type="hidden"][name="orderby"]')
            ->seeElement('input[type="hidden"][name="order"]');
    }
}
