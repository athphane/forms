<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Javaabu\Forms\Tests\TestCase;

class TableTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function it_can_generate_bootstrap_5_table()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('table');

        $this->visit('table')
            ->seeElement('#normal')
            ->within('#normal', function () {
                $this->seeElement('table.table')
                    ->within('table.table', function () {
                        $this->seeElement('thead')
                            ->within('thead', function () {
                                $this->seeElement('tr')
                                    ->within('tr', function () {
                                        $this->seeElement('td')
                                            ->seeInElement('td', 'No')
                                            ->seeInElement('td', 'First Name')
                                            ->seeInElement('td', 'Last Name')
                                            ->seeInElement('td', 'Username');
                                    });
                            });

                        $this->seeElement('tbody')
                            ->within('tbody', function () {
                                $this->seeElement('tr')
                                    ->within('tr', function () {
                                        $this
                                            ->seeInElement('td', '1')
                                            ->seeInElement('td', 'Mark')
                                            ->seeInElement('td', 'Otto')
                                            ->seeInElement('td', '@mdo');
                                    });
                            });
                    });
            });
    }

    /** @test */
    public function it_can_generate_bootstrap_5_striped_table()
    {
        $this->setFrameworkBootstrap5();
        $this->registerTestRoute('table');

        $this->visit('table')
            ->seeElement('#striped')
            ->within('#striped', function () {
                $this->seeElement('table.table.striped');
            });
    }

    /** @test */
    public function it_can_generate_material_26_table()
    {
        $this->setFrameworkMaterialAdmin26();
        $this->registerTestRoute('table');

        $this->visit('table')
            ->seeElement('#material')
            ->within('#material', function () {
                $this->seeElement('div.table-responsive')
                    ->within('div.table-responsive', function () {
                        $this->seeElement('thead')
                            ->within('thead', function () {
                                $this->seeElement('tr')
                                    ->within('tr', function () {
                                        $this->seeElement('th')
                                            ->seeInElement('th', 'No')
                                            ->seeInElement('th', 'First Name')
                                            ->seeInElement('th', 'Last Name')
                                            ->seeInElement('th', 'Username');
                                    });
                            });

                        $this->seeElement('tbody')
                            ->within('tbody', function () {
                                $this->seeElement('tr')
                                    ->within('tr', function () {
                                        $this
                                            ->seeInElement('td', '1')
                                            ->seeInElement('td', 'Mark')
                                            ->seeInElement('td', 'Otto')
                                            ->seeInElement('td', '@mdo');
                                    });
                            });
                    });
            });
    }

}
