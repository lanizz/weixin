<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 10:39
 */

namespace Lanizz\Weixin\Menu;


class KeyButton extends Button
{
    public function __construct($name, $type)
    {
        parent::__construct($name, $type);
    }

    public function setKey($key)
    {
        return $this->key = $key;
    }
}