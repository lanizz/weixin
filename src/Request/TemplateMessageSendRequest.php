<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/8
 * Time: 13:59
 */

namespace Lanizz\Weixin\Request;


use Lanizz\Weixin\TPLMessage\TPLMessage;

class TemplateMessageSendRequest extends Request implements IRequest
{
    protected $url = 'https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=%s';

    public function __construct($accessToken, TPLMessage $message = null)
    {
        $this->url = sprintf($this->url, $accessToken);
        $this->setMethod('POST');
        if($message) $this->setMessage($message);
    }

    public function setMessage(TPLMessage $message)
    {
        $this->setBody($message->output());
    }
}