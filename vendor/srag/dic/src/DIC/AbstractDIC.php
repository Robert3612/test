<?php

namespace srag\DIC\Test\DIC;

use ILIAS\DI\Container;
use srag\DIC\Test\Database\DatabaseDetector;
use srag\DIC\Test\Database\DatabaseInterface;

/**
 * Class AbstractDIC
 *
 * @package srag\DIC\Test\DIC
 */
abstract class AbstractDIC implements DICInterface
{

    /**
     * @var Container
     */
    protected $dic;


    /**
     * @inheritDoc
     */
    public function __construct(Container &$dic)
    {
        $this->dic = &$dic;
    }


    /**
     * @inheritDoc
     */
    public function database() : DatabaseInterface
    {
        return DatabaseDetector::getInstance($this->databaseCore());
    }
}
