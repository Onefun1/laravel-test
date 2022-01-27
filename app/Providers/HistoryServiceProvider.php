<?php

namespace App\Providers;

use App\Service\History\History;

class HistoryServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->singleton(History::class, function () {
            return new History();
        });
    }
}
