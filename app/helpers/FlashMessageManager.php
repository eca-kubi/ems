<?php

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class FlashMessageManager
{

    /**
     * @throws UnknownProperties
     */
    public static function setFlash(PageId $targetPageId, FlashMessageType $type, string $message): void
    {
        $session = SessionManager::getInstance();
        $flash = new FlashMessageDTO(pageId: $targetPageId, type: $type, message: $message);
        $session->set($targetPageId->value, $flash->toArray());
    }

    /**
     * @throws UnknownProperties
     * @throws NoFlashMessageExistsException
     */
    public static function getFlash(PageId $targetPageId): FlashMessageDTO
    {
        $session = SessionManager::getInstance();
        if (self::hasFlash($targetPageId)) {
            $flash = $session->get($targetPageId->value);
            return new FlashMessageDTO(...$flash);
        } else {
            throw new NoFlashMessageExistsException("No flash message found for the current page with id:" . $targetPageId->value);
        }
    }

    public static function unsetFlash(PageId $targetPageId): void
    {
        $session = SessionManager::getInstance();
        if (self::hasFlash($targetPageId)) {
            $session->unset($targetPageId->value);
        }
    }


    /**
     * @param PageId $pageId
     * @param bool $unsetFlash
     * @return void
     */
    public static function showFlashMessage(PageId $pageId, bool $unsetFlash=true): void
    {
        try {
            $flash = FlashMessageManager::getFlash($pageId);
            $alertType = $flash->type->value;
            echo <<<template
        <div class="alert alert-$alertType alert-dismissible text-sm m-auto" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>            <h4>
            $flash->message
            </h4>
        </div>

template;
            if ($unsetFlash){
                self::unsetFlash($pageId);
            }
            ?>
            <?php
        } catch (NoFlashMessageExistsException|UnknownProperties $e) {
        }
    }

    public static function hasFlash(PageId $pageId): bool
    {
        $session = SessionManager::getInstance();
        return $session->hasKey($pageId->value);
    }

}