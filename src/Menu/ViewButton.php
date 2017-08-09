<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 9:56
 */

namespace Lanizz\Weixin\Menu;


class ViewButton extends Button
{
    public function __construct($name)
    {
        parent::__construct($name, 'view');
    }

    public function setUrl($url)
    {
        return $this->url = $url;
    }
}