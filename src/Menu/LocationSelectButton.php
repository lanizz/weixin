<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 10:37
 */

namespace Lanizz\Weixin\Menu;


class LocationSelectButton extends KeyButton
{
    public function __construct($name)
    {
        parent::__construct($name, 'location_select');
    }

}