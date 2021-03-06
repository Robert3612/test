<?php

namespace srag\Plugins\Test\Config;

use srag\Plugins\Test\Config\Form\FormBuilder;
use srag\Plugins\Test\Utils\TestTrait;
use ilTestPlugin;
use srag\ActiveRecordConfig\Test\Config\AbstractFactory;
use srag\ActiveRecordConfig\Test\Config\AbstractRepository;
use srag\ActiveRecordConfig\Test\Config\Config;

/**
 * Class Repository
 *
 * Generated by SrPluginGenerator v2.8.1
 *
 * @package srag\Plugins\Test\Config
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Repository extends AbstractRepository
{

    use TestTrait;

    const PLUGIN_CLASS_NAME = ilTestPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Repository constructor
     */
    protected function __construct()
    {
        parent::__construct();
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
     * @inheritDoc
     *
     * @return Factory
     */
    public function factory() : AbstractFactory
    {
        return Factory::getInstance();
    }


    /**
     * @inheritDoc
     */
    protected function getFields() : array
    {
        return [
            FormBuilder::KEY_SOME => Config::TYPE_STRING
        ];
    }


    /**
     * @inheritDoc
     */
    protected function getTableName() : string
    {
        return ilTestPlugin::PLUGIN_ID . "_config";
    }
}
