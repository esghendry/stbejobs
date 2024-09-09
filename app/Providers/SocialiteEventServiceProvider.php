<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SocialiteEventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // \Illuminate\Support\Facades\Event::listen(
        //     \SocialiteProviders\Manager\SocialiteWasCalled::class,
        //     'SocialiteProviders\\Azure\\AzureExtendSocialite@handle'
        // );
        \Illuminate\Support\Facades\Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('azure', \SocialiteProviders\Azure\Provider::class);
        });
    }
}
