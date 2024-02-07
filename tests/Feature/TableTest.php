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
        $this->setFramework('bootstrap-5');
        $this->registerTestRoute('table');

        $this->visit('table')
            ->seeElement('table.table')
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
    }

}
