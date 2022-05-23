<?php

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class LoginDTO extends PageDTO
{
    const USERNAME = 'username';
    const PASSWORD = 'password';
    const DUMMY_PASSWORD = 'rasmuslerdorf';
    const DUMMY_USER = 'ecakubi@ems.com';

    /**
     * @throws UnknownProperties
     */
    public function __construct(
        public string $title = 'Admin Login',
        public PageId $pageId = PageId::ADMIN_LOGIN,
        public string $username = '',
        public string $password = '',
        public string $url = ''
    )
    {
        parent::__construct();
    }
}