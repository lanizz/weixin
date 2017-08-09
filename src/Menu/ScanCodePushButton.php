<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 10:42
 */

namespace Lanizz\Weixin\Menu;


class ScanCodePushButton extends KeyButton
{

    public function __construct($name)
    {
        parent::__construct($name, 'scancode_push');
    }

}