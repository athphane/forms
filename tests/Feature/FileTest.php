<?php

namespace Javaabu\Forms\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
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
        $this->markTestIncomplete();
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
    public function it_can_generate_bootstrap_5_file_inputs()
    {
        $article = $this->getArticleWithMedia();



        dd($article->getFirstMediaUrl('featured_image', 'thumb'));
        /*$this->setFrameworkBootstrap5();
        $this->registerTestRoute('form-input-prepend-append');

        $this->visit('/form-input-prepend-append')
            ->seeElement('div.mb-4')
            ->within('div.mb-4', function () {
                $this->seeElement('div.input-group')
                    ->seeElement('label.form-label')
                    ->seeInElement('label.form-label[for="title"]', 'Title')
                    ->within('div.input-group', function () {
                        $this->seeElement('div.input-group-text.prepend')
                            ->seeInElement('div.input-group-text.prepend', 'MVR')
                            ->seeElement('input[name="title"][value="Lorem ipsum"].form-control')
                            ->seeElement('div.input-group-text.append')
                            ->seeInElement('div.input-group-text.append', 'New Link');
                    });
            });*/
    }
}
