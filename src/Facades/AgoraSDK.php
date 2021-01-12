<?php

namespace Willywes\AgoraSDK\Facades;

use Illuminate\Support\Facades\Facade;

class AgoraSDK extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'agorasdk';
    }
}
