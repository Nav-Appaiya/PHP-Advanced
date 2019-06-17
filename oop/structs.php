<?php
/**
 * Created by PhpStorm.
 * User: appa352638
 * Date: 17/06/2019
 * Time: 11:53
 */

class Database{
    public function __construct($input)
    {
        echo "{$input}\n";
    }

    public function __destruct()
    {
        echo "desctruct\n";
    }
}

$obj = new Database("construct");