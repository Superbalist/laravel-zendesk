<?php
namespace Superbalist\Zendesk;

use Illuminate\Support\Facades\Facade;

class ZendeskFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zendesk';
    }
}
