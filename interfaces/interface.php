<?php
/**
 * Created by PhpStorm.
 * User: appa352638
 * Date: 17/06/2019
 * Time: 11:36
 */

/**
 * Basic interface having only a public function save
 *
 * Interface TableInterface
 */
interface TableInterface{
    /**
     * @param array $data
     * @return mixed
     */
    public function save(array $data);
}

/**
 * Interface LogInterface
 */
interface LogInterface{

    /**
     * @param $message
     * @return mixed
     */
    public function log($message);
}

/**
 * Implementing tableInterface
 *
 * Class Table
 */
class Table implements TableInterface, LogInterface, Countable {
    /**
     * @param array $data
     * @return string
     */
    public function save(array $data)
    {
        return 'foo ';
    }

    /**
     * @param $message
     * @return string
     */
    public function log($message)
    {
        return $message . "\n";
    }

    public function count()
    {
        return 10;
    }
}

echo (new Table())->save([]);
echo (new Table())->count();