<?php

namespace srag\CustomInputGUIs\Test\HiddenInputGUI;

use ilHiddenInputGUI;
use srag\CustomInputGUIs\Test\Template\Template;
use srag\DIC\Test\DICTrait;

/**
 * Class HiddenInputGUI
 *
 * @package srag\CustomInputGUIs\Test\HiddenInputGUI
 */
class HiddenInputGUI extends ilHiddenInputGUI
{

    use DICTrait;

    /**
     * HiddenInputGUI constructor
     *
     * @param string $a_postvar
     */
    public function __construct(string $a_postvar = "")
    {
        parent::__construct($a_postvar);
    }


    /**
     * @return string
     */
    public function render() : string
    {
        $tpl = new Template("Services/Form/templates/default/tpl.property_form.html", true, true);

        $this->insert($tpl);

        return self::output()->getHTML($tpl);
    }
}
