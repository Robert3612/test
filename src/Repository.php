<?php

namespace srag\Plugins\Test;

use srag\Plugins\Test\Config\Repository as ConfigRepository;
use srag\Plugins\Test\Utils\TestTrait;
use ilTestPlugin;
use srag\DIC\Test\DICTrait;

/**
 * Class Repository
 *
 * Generated by SrPluginGenerator v2.8.1
 *
 * @package srag\Plugins\Test
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Repository
{

    use DICTrait;
    use TestTrait;

    const PLUGIN_CLASS_NAME = ilTestPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Repository constructor
     */
    private function __construct()
    {

    }


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * @return ConfigRepository
     */
    public function config() : ConfigRepository
    {
        return ConfigRepository::getInstance();
    }


    /**
     *
     */
    public function dropTables() : void
    {
        $this->config()->dropTables();
    }


    /**
     *
     */
    public function installTables() : void
    {
        $this->config()->installTables();
    }
}
