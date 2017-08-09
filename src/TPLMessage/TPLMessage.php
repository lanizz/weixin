<?php

/**
 *
 * User: Jinming
 * Date: 2017/8/8
 * Time: 14:07
 */

namespace Lanizz\Weixin\TPLMessage;

use Lanizz\PHPHelper\Arr;

class TPLMessage implements ITPLMessage
{
    private $touser;
    private $template_id;
    private $data;

    public function __construct($templateId, $toUser = '')
    {
        $this->touser = $toUser;
        $this->template_id = $templateId;
    }

    public function setToUser($toUser)
    {
        return $this->touser = $toUser;
    }

    public function addData($key, $value, $color = '')
    {
        $std = new \stdClass();
        $std->value = $value;
        if($color) $std->color = $color;
        return $this->data->$key = $std;
    }

    public function setUrl($url)
    {
        return $this->url = $url;
    }

    public function setMiniProgram($appId, $pagePath)
    {
        $std = new \stdClass();
        $std->appid = $appId;
        $std->pagepath = $pagePath;
        return $this->miniprogram = $std;
    }

    public function output()
    {
        return Arr::cnJsonEncode(get_object_vars($this));
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}