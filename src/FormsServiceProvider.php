<?php

namespace Javaabu\Forms;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        // declare publishes
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('forms.php'),
            ], 'forms-config');

            $this->publishes([
                __DIR__ . '/../lang' => lang_path('vendor/forms'),
            ], 'forms-translations');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/forms'),
            ], 'forms-views');
        }

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'forms');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'forms');

        // declare blade directives
        Blade::directive('model', function ($model) {
            return '<?php app(\Javaabu\Forms\FormsDataBinder::class)->bind(' . $model . '); ?>';
        });

        Blade::directive('endmodel', function ($model) {
            return '<?php app(\Javaabu\Forms\FormsDataBinder::class)->pop(); ?>';
        });

        $this->registerComponents();
    }

    /**
     * Register the components
     */
    protected function registerComponents(): void
    {
        $prefix = config('forms.prefix');

        Blade::component('form', Components\Form::class, $prefix);
        Blade::component('form-required', Components\FormRequired::class, $prefix);
        Blade::component('form-label', Components\FormLabel::class, $prefix);
        Blade::component('form-help', Components\FormHelp::class, $prefix);
        Blade::component('form-group', Components\FormGroup::class, $prefix);
        Blade::component('form-errors', Components\FormErrors::class, $prefix);
        Blade::component('form-input', Components\FormInput::class, $prefix);
        Blade::component('form-text', Components\FormText::class, $prefix);
        Blade::component('form-number', Components\FormNumber::class, $prefix);
        Blade::component('form-tel', Components\FormTel::class, $prefix);
        Blade::component('form-password', Components\FormPassword::class, $prefix);
        Blade::component('form-email', Components\FormEmail::class, $prefix);
        Blade::component('form-url', Components\FormUrl::class, $prefix);
        Blade::component('form-hidden', Components\FormHidden::class, $prefix);
        Blade::component('form-textarea', Components\FormTextarea::class, $prefix);
        Blade::component('form-select', Components\FormSelect::class, $prefix);
        Blade::component('form-select2', Components\FormSelect2::class, $prefix);
        Blade::component('form-checkbox', Components\FormCheckbox::class, $prefix);
        Blade::component('form-button', Components\FormButton::class, $prefix);
        Blade::component('form-submit', Components\FormSubmit::class, $prefix);
        Blade::component('form-card', Components\FormCard::class, $prefix);
        Blade::component('form-card-title', Components\FormCardTitle::class, $prefix);
        Blade::component('form-card-header', Components\FormCardHeader::class, $prefix);
        Blade::component('table', Components\Table::class, $prefix);
        Blade::component('table-row', Components\TableRow::class, $prefix);
        Blade::component('table-cell', Components\TableCell::class, $prefix);
        Blade::component('form-filter', Components\FormFilter::class, $prefix);

    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // merge package config with user defined config
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'forms');

        // register the data binder
        $this->app->singleton(FormsDataBinder::class, fn () => new FormsDataBinder());
    }
}
