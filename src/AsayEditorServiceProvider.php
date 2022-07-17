<?php

namespace Asayhome\AsayEditor;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AsayEditorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/asayeditor.php' => config_path('asayeditor.php'),
        ], 'asayeditor-config');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../lang', 'asayeditor');
        $this->publishes([
            __DIR__ . '/../lang' => $this->app->langPath('vendor/asayeditor'),
        ], 'asayeditor-lang');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'asayeditor');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/asayeditor'),
        ], 'asayeditor-views');
        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/asayeditor'),
        ], 'asayeditor-assets');



        Livewire::component('asay-editor', AsayEditor::class);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/asayeditor.php',
            'asayeditor'
        );
    }
}
