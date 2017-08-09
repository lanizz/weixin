<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/1
 * Time: 14:23
 */

namespace Lanizz\Weixin\Request;


class Request
{
    protected $url;
    protected $method = 'GET';
    protected $acceptFormat = 'JSON';
    protected $body = '';
    protected $SSLFile;
    protected $proxyConfig;
    protected $headers = [];

    public function getURL()
    {
        return $this->url;
    }

    public function getSSLFile()
    {
        return $this->SSLFile;
    }

    public function getProxyConfig()
    {
        return $this->proxyConfig;
    }

    public function setMethod($method){
        return $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getAcceptFormat()
    {
        return $this->acceptFormat;
    }

    public function setBody($body)
    {
        return $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }
    public function getHeaders()
    {
        return $this->headers;
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