<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Javaabu\Forms\Tests\TestCase;

class Bootstrap5Test extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Config::set('forms.framework', 'bootstrap-5');
        Config::set('forms.inputs.required_text', 'forms::strings.required_text');
    }

    /** @test */
    public function it_can_generate_standard_form_labels()
    {
        $this->registerTestRoute('form-label');

        $page = $this->visit('/form-label')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title');

        $class = $page->crawler()->filter('label')->attr('class');

        $this->assertEquals('form-label', $class);
    }

    /** @test */
    public function it_can_generate_required_string_for_form_labels()
    {
        $this->registerTestRoute('form-label-required');

        $this->visit('/form-label-required')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title')
            ->within('label', function () {
                $this->seeElementCount('span.required', 1)
                    ->seeInElement('span.required', '*');
            });
    }

    /** @test */
    public function it_can_float_labels()
    {
        $this->registerTestRoute('form-label-floating');

        $page = $this->visit('/form-label-floating')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title');

        $class = $page->crawler()->filter('label')->attr('class');

        $this->assertNull($class);
    }

    /** @test */
    public function it_can_generate_inline_form_labels()
    {
        $this->registerTestRoute('form-label-inline');

        $page = $this->visit('/form-label-inline')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title');

        $class = $page->crawler()->filter('label')->attr('class');

        $this->assertEquals('col-sm-3 col-lg-2 col-form-label', $class);
    }
}
