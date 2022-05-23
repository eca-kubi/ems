<?php

use Spatie\DataTransferObject\DataTransferObject;

class HomeDTO extends PageDTO
{
    public string $title = "Home";
    public PageId $pageId = PageId::HOME;
    public string $url = '';
}