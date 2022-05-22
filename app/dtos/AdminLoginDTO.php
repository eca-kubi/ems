<?php

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class AdminLoginDTO extends PageDTO
{
    /**
     * @throws UnknownProperties
     */
    public function __construct(
        public string $title = 'Admin Login',
        public PageId $pageId = PageId::ADMIN_LOGIN
    )
    {
        parent::__construct();
    }
}