<?php

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class ContactUsDTO extends  \Spatie\DataTransferObject\DataTransferObject
{
    /**
     * @throws UnknownProperties
     */
    public function __construct(
        public string $title = 'Contact Us',
        public PageId $pageId = PageId::CONTACT,
        public string $email = '',
        public string $message = '',
        public string $phone = '',
        public string $subject = ''
    )
    {
    }
}