<?php
/**
 * 菜单按钮类
 * User:
 * Date: 2017/8/4
 * Time: 18:45
 */

namespace Lanizz\Weixin\Menu;


class Button
{
    public $name;
    public $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function addSubButton(Button $button)
    {
        if (!isset($this->sub_button))
            $this->sub_button = [];
        return $this->sub_button[] = $button;
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