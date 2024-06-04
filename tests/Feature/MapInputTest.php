<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Support\Facades\Route;
use Javaabu\Forms\Tests\TestCase;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Objects\Polygon;
use Javaabu\Forms\Tests\TestSupport\Models\City;

class MapInputTest extends TestCase
{
    const SRID = 4326;

    public function setUp(): void
    {
        parent::setUp();

        if (static::isLaravel9()) {
            // fix for geospatial version 2
            $this->app['config']->set('database.default', 'mysql');
            $this->app['config']->set('database.connections.mysql.database', 'forms');
        }
    }

    /** @test */
    public function it_can_bind_map_inputs_from_attributes()
    {
        $city = new City();
        $lat = 4.175804;
        $lng = 73.509337;
        $wkt = 'POLYGON((73.5092 4.1758, 73.5094 4.1758, 73.5094 4.1757, 73.5092 4.1757, 73.5092 4.1758))';
        $radius = 20;

        $city->coordinates = new Point($lat, $lng, self::SRID);
        $city->boundary = Polygon::fromWkt($wkt, self::SRID);
        $city->radius = $radius;

        $this->setFrameworkMaterialAdmin26();

        Route::get('map-input', function () use ($city) {
            return view('map-input')
                ->with('city', $city);
        })->middleware('web');

        $this->visit('/map-input')
            ->seeElement('#basic-map-input')
            ->within('#basic-map-input', function () use ($lat, $lng, $wkt, $radius) {
                $this->seeElement('input[name="lat"][type="number"][value="' . $lat . '"]')
                     ->seeElement('input[name="lng"][type="number"][value="' . $lng . '"]')
                    ->seeElement('input[name="radius"][type="number"][value="' . $radius . '"]')
                    ->seeInElement('textarea[name="boundary"]', $wkt);
            });
    }

    /** @test */
    public function it_can_bind_map_inputs_from_accessors()
    {
        $city = new City();
        $lat = 4.175804;
        $lng = 73.509337;
        $wkt = 'POLYGON((73.5092 4.1758, 73.5094 4.1758, 73.5094 4.1757, 73.5092 4.1757, 73.5092 4.1758))';
        $radius = 20;

        $city->coordinates = new Point($lat, $lng, self::SRID);
        $city->boundary = Polygon::fromWkt($wkt, self::SRID);
        $city->radius = $radius;

        $this->setFrameworkMaterialAdmin26();

        Route::get('map-input-accessor', function () use ($city) {
            return view('map-input-accessor')
                ->with('city', $city);
        })->middleware('web');

        $this->visit('/map-input-accessor')
            ->seeElement('#accessor-map-input')
            ->within('#accessor-map-input', function () use ($lat, $lng, $wkt, $radius) {
                $this->seeElement('input[name="custom_lat"][type="number"][value="' . $lat . '"]')
                    ->seeElement('input[name="custom_lng"][type="number"][value="' . $lng . '"]')
                    ->seeElement('input[name="custom_radius"][type="number"][value="' . $radius . '"]')
                    ->seeInElement('textarea[name="custom_boundary"]', $wkt);
            });
    }
}
