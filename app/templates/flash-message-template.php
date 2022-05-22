<?php
/** @var PageDTO $dto */

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

try {
    $flash = FlashMessageManager::getFlash($dto->pageId);
    $alertType = $flash->type->value;
    echo <<<template
<div class="flash p-2">
        <div class="alert alert-$alertType alert-dismissible text-sm col-md-10 m-auto" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>             <h4>
            $flash->message
            </h4>
        </div>
 </div>
template;
    ?>
    <?php
} catch (NoFlashMessageExistsException|UnknownProperties $e) {
}
