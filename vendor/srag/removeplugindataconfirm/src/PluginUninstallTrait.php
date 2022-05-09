<?php

namespace srag\RemovePluginDataConfirm\Test;

/**
 * Trait PluginUninstallTrait
 *
 * @package srag\RemovePluginDataConfirm\Test
 */
trait PluginUninstallTrait
{

    use BasePluginUninstallTrait;

    /**
     * @internal
     */
    protected final function afterUninstall() : void
    {

    }


    /**
     * @return bool
     *
     * @internal
     */
    protected final function beforeUninstall() : bool
    {
        return $this->pluginUninstall();
    }
}
