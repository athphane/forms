<?php

namespace Javaabu\Forms\Tests\Feature;

use Javaabu\Forms\Tests\TestCase;

class TabsTest extends TestCase
{
    /** @test */
    public function it_can_generate_material_admin_26_tabs()
    {
        $this->setFrameworkMaterialAdmin26();
        $this->registerTestRoute('tabs');

        $this->visit('/tabs')
            ->seeElement('div.tab-container')
            ->within('.tab-container', function () {
                $this->seeElement('ul.nav.nav-tabs')
                    ->within('ul.nav.nav-tabs', function () {
                        // first tab
                        $this->seeElement('li.nav-item:nth-child(1)')
                            ->within('li.nav-item:nth-child(1)', function () {
                                $this->seeElement('a.nav-link[href="#first-tab"][data-toggle="tab"][role="tab"]')
                                    ->seeInElement('a.nav-link', 'First Tab Title')
                                    ->dontSeeElement('a.active');
                            });

                        // active tab
                        $this->seeElement('li.nav-item:nth-child(2)')
                            ->within('li.nav-item:nth-child(2)', function () {
                                $this->seeElement('a.nav-link.active[href="#active-tab"][data-toggle="tab"][role="tab"]')
                                    ->seeInElement('a.nav-link', 'Active Tab');
                            });

                        // disabled tab
                        $this->seeElement('li.nav-item:nth-child(3)')
                            ->within('li.nav-item:nth-child(3)', function () {
                                $this->seeElement('a.nav-link.disabled[href="#disabled-tab"][data-toggle="tab"][role="tab"]')
                                    ->seeInElement('a.nav-link', 'Disabled Tab')
                                    ->dontSeeElement('a.active');
                            });

                        // external tab
                        $this->seeElement('li.nav-item:nth-child(4)')
                            ->within('li.nav-item:nth-child(4)', function () {
                                $this->seeElement('a.nav-link[href="http://example.com"]')
                                    ->seeInElement('a.nav-link', 'External Tab')
                                    ->dontSeeElement('a.active');
                            });
                    });

                $this->seeElement('div.tab-content')
                    ->within('.tab-content', function () {
                        $this->seeElementCount('div.tab-pane', 3);

                        // first tab
                        $this->seeElement('div.tab-pane#first-tab[role="tabpanel"]')
                            ->dontSeeElement('#first-tab.active')
                            ->seeInElement('#first-tab', 'First Tab Content');

                        // active tab
                        $this->seeElement('div.tab-pane.active.show#active-tab[role="tabpanel"]')
                            ->seeInElement('#active-tab', 'Active Tab Content');

                        // disabled tab
                        $this->seeElement('div.tab-pane#disabled-tab[role="tabpanel"]')
                            ->dontSeeElement('#disabled.active')
                            ->seeInElement('#disabled-tab', 'Disabled Tab Content');

                        // external tab
                        $this->dontSeeElement('div.tab-pane#external-tab');
                    });
            });

    }
}
