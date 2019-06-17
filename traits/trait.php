<?php
/**
 * Created by PhpStorm.
 * User: appa352638
 * Date: 17/06/2019
 * Time: 11:48
 */


trait Log{
    /**
     * Log constructor.
     * @param $msg
     */
    protected function log($msg)
    {
        echo "{$msg}\n";
    }
}


/**
 * Class Table
 */
class Table{
    use Log;

    /**
     * Using our log trait to print save start.
     */
    public function save()
    {
        $this->log("save start");
    }
}

// Print the save method from our trait.
(new Table())->save();