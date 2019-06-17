<?php
/**
 * Created by PhpStorm.
 * User: appa352638
 * Date: 17/06/2019
 * Time: 11:29
 */

require __DIR__ . '/vendor/autoload.php';
use Rych\Random\Random;

echo (new Random())->getRandomInteger(1,5);