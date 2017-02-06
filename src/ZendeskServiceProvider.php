<?php

namespace Superbalist\Zendesk;

use Illuminate\Support\ServiceProvider;
use Zendesk\API\HttpClient as ZendeskAPI;

class ZendeskServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('zendesk', function () {
            $client = new ZendeskAPI(
                $this->app['config']->get('services.zendesk.subdomain'),
                $this->app['config']->get('services.zendesk.username')
            );
            $client->setAuth(
                'basic',
                [
                    'username' => $this->app['config']->get('services.zendesk.username'),
                    'token' => $this->app['config']->get('services.zendesk.token'),
                ]
            );
            return $client;
        });
    }
}
