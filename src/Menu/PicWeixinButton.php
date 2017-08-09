<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 10:44
 */

namespace Lanizz\Weixin\Menu;


class PicWeixinButton extends KeyButton
{

    public function __construct($name)
    {
        parent::__construct($name, 'pic_weixin');
    }

}