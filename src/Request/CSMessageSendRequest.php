<?php

/**
 *
 * User: Jinming
 * Date: 2017/7/31
 * Time: 19:40
 */

namespace Lanizz\Weixin\Request;

use Lanizz\Weixin\CSMessage\ICSMessage;

class CSMessageSendRequest extends Request implements IRequest
{
    protected $url = 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=%s';

    public function __construct($accessToken, ICSMessage $content)
    {
        $this->url = sprintf($this->url, $accessToken);
        $body = $content->output();
        $this->setBody($body);
        $this->setMethod('POST');
    }

}