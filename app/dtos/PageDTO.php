<?php

use Spatie\DataTransferObject\DataTransferObject;

class PageDTO extends DataTransferObject
{
    public string $title = '';
    public PageId $pageId;
    public string $url='';
}