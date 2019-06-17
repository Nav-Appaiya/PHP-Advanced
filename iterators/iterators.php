<?php
/**
 * Created by PhpStorm.
 * User: appa352638
 * Date: 17/06/2019
 * Time: 14:12
 */

/**
 * Basic Iterator extending the Iterator Iterator
 */
class BasicIterator extends IteratorIterator{

    public function __construct($pathToFile)
    {
        parent::__construct(new SplFileObject($pathToFile, 'r'));

        /** @var SplFileObject $file */
        $file = $this->getInnerIterator();
        $file->setFlags(SplFileObject::READ_CSV);
        $file->setCsvControl(',', '"', "\\");
    }
}

$filePath = __DIR__ . '/data.csv';
$iterator = new BasicIterator($filePath);

foreach ($iterator as $i => $row) {
    var_dump($row);
}