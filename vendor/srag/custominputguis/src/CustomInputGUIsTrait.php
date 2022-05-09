<?php

namespace srag\CustomInputGUIs\Test;

/**
 * Trait CustomInputGUIsTrait
 *
 * @package srag\CustomInputGUIs\Test
 */
trait CustomInputGUIsTrait
{

    /**
     * @return CustomInputGUIs
     */
    protected static final function customInputGUIs() : CustomInputGUIs
    {
        return CustomInputGUIs::getInstance();
    }
}
