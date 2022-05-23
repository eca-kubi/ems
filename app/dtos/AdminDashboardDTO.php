<?php

use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class AdminDashboardDTO extends PageDTO
{
    /**
     * @throws UnknownProperties
     */
    public function __construct(
        public string $title = 'Admin Dashboard',
        public PageId $pageId = PageId::ADMIN_DASHBOARD,
        public string $url = ''
    )
    {
        parent::__construct();
    }
}