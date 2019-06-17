<?php
/**
 * Created by PhpStorm.
 * User: appa352638
 * Date: 17/06/2019
 * Time: 14:24
 */


/**
 * Fizz Buzz, if you haven't heard of Fizz Buzz before it's a problem whereby you loop over a collection of numbers
 * and output "fizz" if the number is perfectly divisible by three, and "buzz" when it's divisible by five.
 * And fizzbuzz, when divisible by three and five, such as 15.
 *
 * @param $limit
 * @return Generator|void
 */
function fizzbuzz($limit)
{
    $i = 0;

    while($i <= $limit){
        $yield = null;

        if($i % 3 == 0){
            $yield = 'fizz';
        }

        if($i % 5 == 0){
            $yield .= 'buzz';
        }

        yield $yield;
        $i++;
    }

    return;
}

foreach (fizzbuzz(25) as $key => $value) {
    echo "{$key} => {$value}\n";
}