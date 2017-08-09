<?php

/**
 * 客服消息实体基础类
 * User: Jinming
 * Date: 2017/7/29
 * Time: 9:23
 */

namespace Lanizz\Weixin\CSMessage;

class CSMessage implements ICSMessage
{
    /**
     * 接收者openid
     * @var string
     */
    private $touser;
    /**
     * 消息类型
     * @var string
     */
    private $msgtype;

    /**
     * CSMessage constructor.
     * @param $toUser string
     * @param $msgType string
     */
    public function __construct($toUser, $msgType)
    {
        $this->touser = $toUser;
        $this->msgtype = $msgType;
    }

    /**
     * 设置接收者openid
     * @param $toUser
     * @return mixed
     */
    public function setToUser($toUser)
    {
        return $this->touser = $toUser;
    }

    /**
     * 设置消息类型
     * @param $msgType
     * @return mixed
     */
    public function setMsgType($msgType)
    {
        return $this->msgtype = $msgType;
    }

    /**
     * 获取接收者openid
     * @return string
     */
    public function getToUser()
    {
        return $this->touser;
    }

    /**
     * 获取消息类型
     * @return string
     */
    public function getMsgType()
    {
        return $this->msgtype;
    }

    /**
     * @param $name
     * @param $value
     * @return mixed
     */
    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * 返回JSON数据
     * @return string
     */
    public function output()
    {
        return json_encode(get_object_vars($this));
    }

    /**
     * 设置发送消息的客服帐号
     * @param $account
     */
    public function setCustomAccount($account)
    {
        $custom = new \stdClass();
        $custom->kf_account = $account;
        $this->customservice = $custom;
    }

}