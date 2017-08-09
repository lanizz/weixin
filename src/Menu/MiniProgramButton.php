<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 9:57
 */

namespace Lanizz\Weixin\Menu;


class MiniProgramButton extends Button
{

    public function __construct($name)
    {
        parent::__construct($name, 'miniprogram');
    }

    public function setUrl($url)
    {
        return $this->url = $url;
    }

    public function setAppId($id)
    {
        return $this->appid = $id;
    }

    public function setPagePath($path)
    {
        return $this->pagepath = $path;
    }
}