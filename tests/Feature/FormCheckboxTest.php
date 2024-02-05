<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Javaabu\Forms\Tests\TestCase;

class FormCheckboxTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Config::set('forms.inputs.required_text', 'forms::strings.required_text');
        Config::set('forms.inputs.inline', false);
    }

    /** @test */
    public function it_can_generate_bootstrap_5_form_checkbox()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-checkbox');

        $this->visit('/form-checkbox')
            ->seeElement('div.form-check')
            ->within('div.form-check', function () {
                $this
                    ->seeElement('input[name="check_me"][id="check_me"][type="checkbox"].form-check-input')
                    ->seeElement('label.form-check-label')
                    ->seeInElement('label.form-check-label[for="check_me"]', 'Check Me');
            });
    }

    /** @test */
    public function it_can_generate_bootstrap_5_form_checkbox_that_is_required()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-checkbox-required');

        $this->visit('/form-checkbox-required')
            ->seeElement('div.form-check')
            ->within('div.form-check', function () {
                $this
                    ->seeElement('input[name="check_me"][id="check_me"][type="checkbox"][required].form-check-input')
                    ->seeElement('label.form-check-label[for="check_me"]')
                    ->seeInElement('label.form-check-label[for="check_me"]', 'Check Me')
                    ->within('label.form-check-label[for="check_me"]', function () {
                        $this->seeElement('span.text-danger')
                            ->seeInElement('span.text-danger', '*');
                    });
            });
    }

    /** @test */
    public function it_can_generate_material_admin_26_form_checkbox()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-checkbox');

        $this->visit('/form-checkbox')
            ->seeElement('div.checkbox')
            ->within('div.checkbox', function () {
                $this
                    ->seeElement('input[name="check_me"][id="check_me"][type="checkbox"].form-check-input')
                    ->seeElement('label.checkbox__label')
                    ->seeInElement('label.checkbox__label[for="check_me"]', 'Check Me');
            });
    }

    /** @test */
    public function it_can_generate_material_admin_26_form_checkbox_that_is_required()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-checkbox-required');

        $this->visit('/form-checkbox-required')
            ->seeElement('div.checkbox')
            ->within('div.checkbox', function () {
                $this
                    ->seeElement('input[name="check_me"][id="check_me"][type="checkbox"][required].form-check-input')
                    ->seeElement('label.checkbox__label[for="check_me"]')
                    ->seeInElement('label.checkbox__label[for="check_me"]', 'Check Me')
                    ->within('label.checkbox__label[for="check_me"]', function () {
                        $this->seeElement('span.text-danger')
                            ->seeInElement('span.text-danger', '*');
                    });
            });
    }

}
