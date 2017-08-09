<?php
/**
 *
 * User: Jinming
 * Date: 2017/7/31
 * Time: 17:24
 */

namespace Lanizz\Weixin\Support;


class WxResponse
{
    private $errcode;
    private $errmsg;
    private $body;

    public function setErrCode($errcode)
    {
        return $this->errcode = $errcode;
    }

    public function getErrCode()
    {
        return $this->errcode;
    }

    public function setErrMsg($errmsg)
    {
        return $this->errmsg = $errmsg;
    }

    public function getErrMsg()
    {
        return $this->errmsg;
    }

    public function isSuccess()
    {
        return $this->errcode > 0 ? false : true;
    }

    public function setBody($body)
    {
        return $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }
}