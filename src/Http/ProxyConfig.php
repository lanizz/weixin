<?php
/**
 * 代理环境配置类
 * User: Jinming
 * Date: 2017/7/31
 * Time: 19:23
 */

namespace Lanizz\Weixin\Http;


class ProxyConfig
{
    private $IP;
    private $port;
    private $type = 'HTTP';


    public function __construct($IP, $port)
    {
        $this->ip = $IP;
        $this->port = $port;
    }

    public function setType($type)
    {
        return $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setIP($IP)
    {
        return $this->IP = $IP;
    }

    public function getIP()
    {
        return $this->IP;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port)
    {
        return $this->port = $port;
    }
}