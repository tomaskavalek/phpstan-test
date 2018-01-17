<?php
/**
 * Created by PhpStorm.
 * User: tomaskavalek
 * Date: 08.01.18
 * Time: 15:37
 */

namespace App\Model;

use Nette\Database\Connection;
use Nette\Database\Context;
use Ublaboo\NetteDatabaseDataSource\NetteDatabaseDataSource;

class DataSource
{
    private $database;
    private $context;

    public function __construct(Context $context, Connection $database)
    {
        $this->context = $context;
        $this->database = $database;
    }
}