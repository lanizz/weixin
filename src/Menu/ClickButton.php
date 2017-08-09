<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 9:52
 */

namespace Lanizz\Weixin\Menu;


class ClickButton extends KeyButton
{
    public function __construct($name)
    {
        parent::__construct($name, 'click');
    }

}