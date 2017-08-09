<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 10:41
 */

namespace Lanizz\Weixin\Menu;


class ScanCodeWaitMsgButton extends KeyButton
{
    public function __construct($name)
    {
        parent::__construct($name, 'scancode_waitmsg');
    }

}