<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Support\Facades\Route;
use Javaabu\Forms\Tests\TestCase;

class Select2Test extends TestCase
{
    /** @test */
    public function it_can_render_a_select2_basic_element()
    {
        $post = [
            'author' => 2,
        ];

        $options = [
            '1' => 'Arushad',
            '2' => 'John',
            '3' => 'Amy',
        ];

        Route::get('select2-basic', function () use ($post, $options) {
            return view('select2-basic')
                ->with('post', $post)
                ->with('options', $options);
        })->middleware('web');

        $this->visit('/select2-basic')
            ->seeElement('select.select2-basic[id="author"][data-allow-clear="true"][data-placeholder="Nothing Selected"]')
            ->seeElement('option[value=""]')
            ->seeElement('option[value="1"]')
            ->seeElement('option[value="2"]:selected')
            ->seeElement('option[value="3"]');
    }

    /** @test */
    public function it_can_render_a_select_2_basic_element_with_a_label()
    {
        $post = [
            'author' => 2,
        ];

        $options = [
            '1' => 'Arushad',
            '2' => 'John',
            '3' => 'Amy',
        ];

        Route::get('select2-basic', function () use ($post, $options) {
            return view('select2-basic-label')
                ->with('post', $post)
                ->with('options', $options);
        })->middleware('web');

        $this->visit('/select2-basic')
            ->seeElement('label[for="author"]')
            ->seeElement('select.select2-basic[id="author"][data-allow-clear="true"][data-placeholder="Nothing Selected"]')
            ->seeElement('option[value=""]')
            ->seeElement('option[value="1"]')
            ->seeElement('option[value="2"]:selected')
            ->seeElement('option[value="3"]');
    }

    /** @test */
    public function it_can_render_a_select2_ajax_element()
    {
        $post = [
            'author' => 2,
        ];

        $options = [
            '2' => 'John',
        ];

        Route::get('select2-ajax', function () use ($post, $options) {
            return view('select2-ajax')
                ->with('post', $post)
                ->with('options', $options);
        })->middleware('web');

        $this->visit('/select2-ajax')
            ->seeElement('select.select2-ajax[id="author"][data-allow-clear="true"][data-placeholder="Nothing Selected"][data-select-ajax-url="/api/authors"][data-name-field="list_name"]')
            ->seeElement('option[value=""]')
            ->seeElement('option[value="2"]:selected');
    }
}
