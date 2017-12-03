<?php
namespace Backtheweb\Page\Facades;

use Illuminate\Support\Facades\Facade;

class Page extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Backtheweb\Page\Page::class;
    }
}