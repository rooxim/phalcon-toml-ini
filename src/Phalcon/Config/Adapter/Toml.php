<?php
/**
 * Created by PhpStorm.
 * User: yuuto
 * Date: 2017/10/14
 * Time: 2:18
 */

namespace Phalcon\Config\Adapter;

use \Phalcon\Config;
use Yosymfony\Toml\Toml as Parser;


class Toml extends Config
{
    public function __construct(string $filePath)
    {

        parent::__construct(Parser::Parse($filePath)??[]);
    }


}