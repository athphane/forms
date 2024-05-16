<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Route;
use Javaabu\Forms\Tests\TestCase;
use Javaabu\Forms\Tests\TestSupport\Models\Article;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class FileTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->setupFakeMediaDisk();
    }

    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    protected function getArticleWithMedia(string $collection = 'featured_image'): Article
    {
        $article = new Article(['title' => 'Test article']);
        $article->save();

        $image_file = UploadedFile::fake()->image('some-cool-image.jpg', 1000, 500)->size(512);
        $article->addMedia($image_file)->toMediaCollection($collection);

        return $article;
    }

    /** @test */
    public function it_can_render_missing_file_inputs()
    {
        $article = $this->getArticleWithMedia();

        $this->setFrameworkMaterialAdmin26();

        Route::get('file-missing', function () use ($article) {
            return view('file-missing')
                ->with('article', $article);
        })->middleware('web');

        $this->visit('/file-missing')
            ->seeElement('div.form-group')
            ->within('div.form-group', function () {
                $this->seeElement('div.fileinput.fileinput-new')
                    ->within('div.fileinput', function () {
                        $this->seeElement('span.btn-file')
                            ->within('span.btn-file', function () {
                                $this->seeElement('input[name="og_image"][type="file"][accept="application/pdf,image/jpeg,image/png"]#og_image');
                            });

                        $this->seeElement('span.fileinput-filename')
                            ->within('span.fileinput-filename', function () {
                                $this->dontSeeElement('a');
                            });
                    });
            });
    }

    /** @test */
    public function it_can_render_unbound_file_inputs()
    {
        $this->setFrameworkMaterialAdmin26();

        $this->registerTestRoute('file-unbound');

        $this->visit('/file-unbound')
            ->seeElement('div.form-group')
            ->within('div.form-group', function () {
                $this->seeElement('div.fileinput.fileinput-new')
                    ->within('div.fileinput', function () {
                        $this->seeElement('span.btn-file')
                            ->within('span.btn-file', function () {
                                $this->seeElement('input[name="featured_image"][type="file"][accept="application/pdf,image/jpeg,image/png"]#featured_image');
                            });

                        $this->seeElement('span.fileinput-filename')
                            ->within('span.fileinput-filename', function () {
                                $this->dontSeeElement('a');
                            });
                    });
            });
    }

    /** @test */
    public function it_can_render_file_inputs_with_attribute_accessor()
    {
        $article = $this->getArticleWithMedia();

        $this->setFrameworkMaterialAdmin26();

        Route::get('file-attribute-accessor', function () use ($article) {
            return view('file-attribute-accessor')
                ->with('article', $article);
        })->middleware('web');

        $this->visit('/file-attribute-accessor')
            ->seeElement('div.form-group')
            ->within('div.form-group', function () {
                $this->seeElement('div.fileinput.fileinput-exists')
                    ->within('div.fileinput', function () {
                        $this->seeElement('span.btn-file')
                            ->within('span.btn-file', function () {
                                $this->seeElement('input[name="thumbnail"][type="file"][accept="application/pdf,image/jpeg,image/png"]#thumbnail');
                            });

                        $this->seeElement('span.fileinput-filename')
                            ->within('span.fileinput-filename', function () {
                                $this->seeElement('a[href="/storage/1/conversions/some-cool-image-thumb.jpg"]');
                            });
                    });
            });
    }

    /** @test */
    public function it_can_render_file_inputs_with_accessor()
    {
        $article = $this->getArticleWithMedia();

        $this->setFrameworkMaterialAdmin26();

        Route::get('file-accessor', function () use ($article) {
            return view('file-accessor')
                ->with('article', $article);
        })->middleware('web');

        $this->visit('/file-accessor')
            ->seeElement('div.form-group')
            ->within('div.form-group', function () {
                $this->seeElement('div.fileinput.fileinput-exists')
                    ->within('div.fileinput', function () {
                        $this->seeElement('span.btn-file')
                            ->within('span.btn-file', function () {
                                $this->seeElement('input[name="photo"][type="file"][accept="application/pdf,image/jpeg,image/png"]#photo');
                            });

                        $this->seeElement('span.fileinput-filename')
                            ->within('span.fileinput-filename', function () {
                                $this->seeElement('a[href="/storage/1/some-cool-image.jpg"]');
                            });
                    });
            });
    }

    /** @test */
    public function it_can_render_file_inputs_with_conversion_name()
    {
        $article = $this->getArticleWithMedia();

        $this->setFrameworkMaterialAdmin26();

        Route::get('file-conversion', function () use ($article) {
            return view('file-conversion')
                ->with('article', $article);
        })->middleware('web');

        $this->visit('/file-conversion')
            ->seeElement('div.form-group')
            ->within('div.form-group', function () {
                $this->seeElement('div.fileinput.fileinput-exists')
                    ->within('div.fileinput', function () {
                        $this->seeElement('span.btn-file')
                            ->within('span.btn-file', function () {
                                $this->seeElement('input[name="featured_image"][type="file"][accept="application/pdf,image/jpeg,image/png"]#featured_image');
                            });

                        $this->seeElement('span.fileinput-filename')
                            ->within('span.fileinput-filename', function () {
                                $this->seeElement('a[href="/storage/1/conversions/some-cool-image-thumb.jpg"]');
                            });
                    });
            });
    }

    /** @test */
    public function it_can_render_file_inputs_with_collection_name()
    {
        $article = $this->getArticleWithMedia();

        $this->setFrameworkMaterialAdmin26();

        Route::get('file-collection', function () use ($article) {
            return view('file-collection')
                ->with('article', $article);
        })->middleware('web');

        $this->visit('/file-collection')
            ->seeElement('div.form-group')
            ->within('div.form-group', function () {
                $this->seeElement('div.fileinput.fileinput-exists')
                    ->within('div.fileinput', function () {
                        $this->seeElement('span.btn-file')
                            ->within('span.btn-file', function () {
                                $this->seeElement('input[name="post_image"][type="file"][accept="application/pdf,image/jpeg,image/png"]#post_image');
                            });

                        $this->seeElement('span.fileinput-filename')
                            ->within('span.fileinput-filename', function () {
                                $this->seeElement('a[href="/storage/1/some-cool-image.jpg"]');
                            });
                    });
            });
    }

    /** @test */
    public function it_can_render_material_admin_26_file_inputs()
    {
        $article = $this->getArticleWithMedia();

        $this->setFrameworkMaterialAdmin26();

        Route::get('file', function () use ($article) {
            return view('file')
                ->with('article', $article);
        })->middleware('web');

        $this->visit('/file')
            ->seeElement('div.form-group')
            ->within('div.form-group', function () {
                $this->seeElement('div.fileinput.fileinput-exists')
                     ->within('div.fileinput', function () {
                         $this->seeElement('span.btn-file')
                              ->within('span.btn-file', function () {
                                  $this->seeElement('input[name="featured_image"][type="file"][accept="application/pdf,image/jpeg,image/png"]#featured_image');
                              });

                         $this->seeElement('span.fileinput-filename')
                             ->within('span.fileinput-filename', function () {
                                 $this->seeElement('a[href="/storage/1/some-cool-image.jpg"]');
                             });
                     });
            });
    }
}
