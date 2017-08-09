<?php
/**
 *
 * User: Jinming
 * Date: 2017/7/31
 * Time: 20:23
 */

namespace Lanizz\Weixin\Request;


class AccessTokenRequest extends Request implements IRequest
{
    protected $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s';

    public function __construct($appId, $appSecret, $customURL = '')
    {
        if ($customURL) $this->url = $customURL;
        return $this->url = sprintf($this->url, $appId, $appSecret);
    }

}