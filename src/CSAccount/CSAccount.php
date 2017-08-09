<?php
/**
 * 客服帐号实体类
 * User: Jinming
 * Date: 2017/8/4
 * Time: 15:51
 */

namespace Lanizz\Weixin\CSAccount;


class CSAccount implements ICSAccount
{
    private $kf_account;
    private $nickname;
    private $password;

    public function __construct($account, $nickname, $password)
    {
        $this->kf_account = $account;
        $this->nickname = $nickname;
        $this->password = $password;
    }

    public function setAccount($account)
    {
        return $this->kf_account = $account;
    }

    public function getAccount()
    {
        return $this->kf_account;
    }

    public function setNickname($nickname)
    {
        return $this->nickname = $nickname;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function setPassword($password)
    {
        return $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function output()
    {
        return json_encode(get_object_vars($this));
    }
}