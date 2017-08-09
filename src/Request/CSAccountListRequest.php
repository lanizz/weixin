<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/2
 * Time: 10:56
 */

namespace Lanizz\Weixin\Request;


class CSAccountListRequest extends Request implements IRequest
{
    protected $url = 'https://api.weixin.qq.com/cgi-bin/customservice/getkflist?access_token=%s';

    public function __construct($accessToken)
    {
        $this->url = sprintf($this->url, $accessToken);
    }

}