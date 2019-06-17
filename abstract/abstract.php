<?php
/**
 * Created by PhpStorm.
 * User: appa352638
 * Date: 17/06/2019
 * Time: 14:05
 */

/**
 * Abstract class for database
 *
 * Class Database
 */
abstract class Database{

    /**
     * @return mixed
     */
    abstract public function connection();

    /**
     *
     */
    public function disconnect(){
        // Disconnect from DB server
    }
}

class Mysql extends Database{


    /**
     * @return mixed
     */
    public function connection()
    {
        // TODO: Implement connection() method.
    }
}


//$db = new Database(); // << this does not work, as we cannot instantiate the abstract class database
$mysql = new Mysql(); // << this works, as we extend from database and have a instatiated class mysql