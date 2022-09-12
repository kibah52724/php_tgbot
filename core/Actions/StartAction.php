<?php declare(strict_types=1);

namespace Core\Actions;

use SimpleTelegramBot\Chat\MessageHelper;
use SimpleTelegramBot\Connection\ConnectionService;

/**
 * Class StartAction
 *
 * @package Core\Actions
 */
class StartAction
{
    /**
     * @param object $update
     * @param ConnectionService $connectionService
     */
    public function __invoke(object $update, ConnectionService $connectionService): void
    {
        $messageHelper = new MessageHelper($connectionService);
        $messageHelper->sendWithoutResponse($update->message->chat->id, 'Здравствуйте! Напишите свое обращение и мы ответим вам в ближайшее время. В обращении обязательно напишите свое ФИО!');
    }
}