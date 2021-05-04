<?php

namespace Telegram\Bot\Laravel\Facades;

use Telegram\Bot\BotsManager;
use Illuminate\Support\Facades\Facade;
use Telegram\Bot\Objects\Update;

/**
 * Class Telegram.
 *
 * @method static Update|Update[] commandsHandler(bool $webhook = false)

 */
class Telegram extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BotsManager::class;
    }
}
