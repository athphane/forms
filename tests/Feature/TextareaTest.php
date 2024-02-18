<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Javaabu\Forms\Tests\TestCase;

class TextareaTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Config::set('forms.inputs.required_text', 'forms::strings.required_text');
        Config::set('forms.inputs.inline', false);
    }

    /** @test */
    public function it_can_generate_bootstrap_5_form_textarea()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('form-textarea');

        $this->visit('/form-textarea')
            ->seeElement('div.mb-4')
            ->within('div.mb-4', function () {
                $this->seeElement('textarea[name="title"][id="title"].form-control')
                    ->seeInElement('textarea[name="title"][id="title"].form-control', 'Lorem ipsum')
                    ->seeElement('label.form-label')
                    ->seeInElement('label.form-label[for="title"]', 'Title');
            });
    }

    /** @test */
    public function it_can_generate_material_admin_26_form_textarea()
    {
        $this->setFrameworkMaterialAdmin26();
        $this->registerTestRoute('form-textarea');

        $this->visit('/form-textarea')
            ->seeElement('div.form-group')
            ->within('div.form-group', function () {
                $this->seeElement('textarea[name="title"][id="title"].form-control')
                    ->seeInElement('textarea[name="title"][id="title"].form-control', 'Lorem ipsum')
                    ->seeElement('i.form-group__bar')
                    ->seeElement('label[for="title"]')
                    ->seeInElement('label', 'Title');
            });
    }
}
