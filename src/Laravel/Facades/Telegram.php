<?php

namespace Telegram\Bot\Laravel\Facades;

use Telegram\Bot\BotsManager;
use Illuminate\Support\Facades\Facade;
use Telegram\Bot\Objects\Message as MessageObject;
use Telegram\Bot\Objects\Update;

/**
 * Class Telegram.
 *
 * @method static Update|Update[] commandsHandler(bool $webhook = false)
 * @method static MessageObject sendMessage(array $params)
 * @method static MessageObject forwardMessage(array $params)
 * @method static MessageObject sendPhoto(array $params)
 * @method static MessageObject sendAudio(array $params)
 * @method static MessageObject sendDocument(array $params)
 * @method static MessageObject sendVideo(array $params)
 * @method static MessageObject sendAnimation(array $params)
 * @method static MessageObject sendVoice(array $params)
 * @method static MessageObject sendVideoNote(array $params)
 * @method static MessageObject sendMediaGroup(array $params) // todo something with return type
 * @method static MessageObject sendVenue(array $params)
 * @method static MessageObject sendContact(array $params)
 * @method static MessageObject sendPoll(array $params)
 * @method static MessageObject sendDice(array $params)
 * @method static bool sendChatAction(array $params)

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
