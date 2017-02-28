<?php

namespace Zazalt\System\Tests;

use Zazalt\System\System;

class SystemTest extends \Zazalt\System\Tests\ZazaltTest
{
    protected $that;

    public function __construct()
    {
        parent::loader(System::class, []);
    }
}