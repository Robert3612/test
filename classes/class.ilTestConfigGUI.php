<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\Plugins\Test\Config\ConfigCtrl;
use srag\Plugins\Test\Utils\TestTrait;
use srag\DevTools\Test\DevToolsCtrl;
use srag\DIC\Test\DICTrait;

/**
 * Class ilTestConfigGUI
 *
 * Generated by SrPluginGenerator v2.8.1
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 *
 * @ilCtrl_isCalledBy srag\DevTools\Test\DevToolsCtrl: ilTestConfigGUI
 */
class ilTestConfigGUI extends ilPluginConfigGUI
{

    use DICTrait;
    use TestTrait;

    const CMD_CONFIGURE = "configure";
    const PLUGIN_CLASS_NAME = ilTestPlugin::class;


    /**
     * ilTestConfigGUI constructor
     */
    public function __construct()
    {

    }


    /**
     * @inheritDoc
     */
    public function performCommand(/*string*/ $cmd) : void
    {
        $this->setTabs();

        $next_class = self::dic()->ctrl()->getNextClass($this);

        switch (strtolower($next_class)) {
            case strtolower(ConfigCtrl::class):
                self::dic()->ctrl()->forwardCommand(new ConfigCtrl());
                break;

            case strtolower(DevToolsCtrl::class):
                self::dic()->ctrl()->forwardCommand(new DevToolsCtrl($this, self::plugin()));
                break;

            default:
                $cmd = self::dic()->ctrl()->getCmd();

                switch ($cmd) {
                    case self::CMD_CONFIGURE:
                        $this->{$cmd}();
                        break;

                    default:
                        break;
                }
                break;
        }
    }


    /**
     *
     */
    protected function configure() : void
    {
        self::dic()->ctrl()->redirectByClass(ConfigCtrl::class, ConfigCtrl::CMD_CONFIGURE);
    }


    /**
     *
     */
    protected function setTabs() : void
    {
        ConfigCtrl::addTabs();

        DevToolsCtrl::addTabs(self::plugin());

        self::dic()->locator()->addItem(ilTestPlugin::PLUGIN_NAME, self::dic()->ctrl()->getLinkTarget($this, self::CMD_CONFIGURE));
    }
}
