<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Javaabu\Forms\Tests\TestCase;

class FormLabelTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Config::set('forms.inputs.required_text', 'forms::strings.required_text');
    }

    /** @test */
    public function it_can_generate_bootstrap_5_standard_form_labels()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-label');

        $page = $this->visit('/form-label')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title');

        $class = $page->crawler()->filter('label')->attr('class');

        $this->assertEquals('form-label', $class);
    }

    /** @test */
    public function it_can_generate_bootstrap_5_required_string_for_form_labels()
    {
        $this->setFramework('bootstrap-5');
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
    public function it_can_float_bootstrap_5_labels()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-label-floating');

        $page = $this->visit('/form-label-floating')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title');

        $class = $page->crawler()->filter('label')->attr('class');

        $this->assertNull($class);
    }

    /** @test */
    public function it_can_generate_bootstrap_5_inline_form_labels()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-label-inline');

        $page = $this->visit('/form-label-inline')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title');

        $class = $page->crawler()->filter('label')->attr('class');

        $this->assertEquals('col-sm-3 col-lg-2 col-form-label', $class);
    }

    /** @test */
    public function it_can_display_bootstrap_5_form_help_text()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-help');

        $this->visit('/form-help')
            ->seeElementCount('div.form-text', 1)
            ->seeInElement('div.form-text', 'This is a help text');
    }

    /** @test */
    public function it_can_generate_material_admin_26_standard_form_labels()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-label');

        $page = $this->visit('/form-label')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title');

        $class = $page->crawler()->filter('label')->attr('class');

        $this->assertNull($class);
    }

    /** @test */
    public function it_can_generate_material_admin_26_required_string_for_form_labels()
    {
        $this->setFramework('material-admin-26');
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
    public function it_can_float_material_admin_26_labels()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-label-floating');

        $page = $this->visit('/form-label-floating')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title');

        $class = $page->crawler()->filter('label')->attr('class');

        $this->assertNull($class);
    }

    /** @test */
    public function it_can_generate_material_admin_26_inline_form_labels()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-label-inline');

        $page = $this->visit('/form-label-inline')
            ->seeElementCount('label', 1)
            ->seeInElement('label', 'Title');

        $class = $page->crawler()->filter('label')->attr('class');

        $this->assertEquals('col-sm-3 col-lg-2 col-form-label', $class);
    }

    /** @test */
    public function it_can_display_material_admin_26_form_help_text()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-help');

        $this->visit('/form-help')
            ->seeElementCount('small.form-text.text-muted', 1)
            ->seeInElement('small.form-text.text-muted', 'This is a help text');
    }
}
