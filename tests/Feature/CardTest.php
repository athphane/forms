<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Javaabu\Forms\Tests\TestCase;

class CardTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        Config::set('forms.inputs.required_text', 'forms::strings.required_text');
        Config::set('forms.inputs.inline', false);
    }

    /** @test */
    public function it_can_generate_bootstrap_5_card()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#normal')
            ->within('div#normal', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('div.card-body')
                            ->within('div.card-body', function () {
                                $this->seeElement('h5.card-title')
                                    ->seeInElement('h5.card-title', 'Card Title')
                                    ->see('This is a card');
                            });
                    });
            });
    }

    /** @test */
    public function it_can_generate_bootstrap_5_card_with_header()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#header')
            ->within('div#header', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('h5.card-title')
                            ->seeInElement('h5.card-title', 'Card Title');
                    });
            });
    }

    /** @test */
    public function it_can_generate_bootstrap_5_card_with_subtitle()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#subtitle')
            ->within('div#subtitle', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('h6.card-subtitle')
                            ->seeInElement('h6.card-subtitle', 'Card Subtitle');
                    });
            });
    }

    /** @test */
    public function it_can_generate_bootstrap_5_card_with_image_top()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#image-top')
            ->within('div#image-top', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('img.card-img-top');
                    });
            });
    }

    /** @test */
    public function it_can_generate_bootstrap_5_card_with_footer()
    {
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#footer')
            ->within('div#footer', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('div.card-footer');
                    });
            });
    }

    // write test for material admin

    /** @test */
    public function it_can_generate_material_admin_26_card()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#normal')
            ->within('div#normal', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('div.card-body')
                            ->within('div.card-body', function () {
                                $this->seeElement('h4.card-title')
                                    ->seeInElement('h4.card-title', 'Card Title')
                                    ->see('This is a card');
                            });
                    });
            });
    }

    /** @test */
    public function it_can_generate_material_admin_26_card_with_header()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#header')
            ->within('div#header', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('h4.card-title')
                            ->seeInElement('h4.card-title', 'Card Title');
                    });
            });
    }

    /** @test */
    public function it_can_generate_material_admin_26_card_with_subtitle()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#subtitle')
            ->within('div#subtitle', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('h6.card-subtitle')
                            ->seeInElement('h6.card-subtitle', 'Card Subtitle');
                    });
            });
    }

    /** @test */
    public function it_can_generate_material_admin_26_card_with_image_top()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#image-top')
            ->within('div#image-top', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('img.card-img-top');
                    });
            });
    }

    /** @test */
    public function it_can_generate_material_admin_26_card_with_footer()
    {
        $this->setFramework('material-admin-26');
        $this->registerTestRoute('form-card');

        $this->visit('/form-card')
            ->seeElement('div#footer')
            ->within('div#footer', function () {
                $this
                    ->seeElement('div.card')
                    ->within('div.card', function () {
                        $this->seeElement('div.card-footer');
                    });
            });
    }
}
