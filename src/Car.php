<?php

namespace RomanPiletski\packageTest;

use RomanPiletski\packageTest\Components\Session;

class Car
{
    public function __construct()
    {
        Session::set('key', '123');
        echo "Hello!!";
    }

}