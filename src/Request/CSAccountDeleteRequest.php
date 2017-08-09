<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/2
 * Time: 10:55
 */

namespace Lanizz\Weixin\Request;


class CSAccountDeleteRequest extends Request implements IRequest
{
    protected $url = 'https://api.weixin.qq.com/customservice/kfaccount/del?access_token=%s';

    public function __construct($accessToken, ICSAccount $account)
    {
        $this->url = sprintf($this->url, $accessToken);
        $this->setMethod('POST');
        $this->setAccount($account);
    }

    public function setAccount(ICSAccount $account)
    {
        return $this->setBody($account->output());
    }
}