<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/4
 * Time: 18:42
 */

namespace Lanizz\Weixin\Menu;

use Lanizz\PHPHelper\Arr;

class Menu
{
    private $button = [];

    public function addButton(Button $button)
    {
        return $this->button[] = $button;
    }

    public function output()
    {
        return Arr::cnJsonEncode(get_object_vars($this));
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $name;
    }
}