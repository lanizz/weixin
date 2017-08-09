<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/2
 * Time: 10:55
 */

namespace Lanizz\Weixin\Request;


class CSAccountAvatarRequest extends Request implements IRequest
{

    protected $url = 'http://api.weixin.qq.com/customservice/kfaccount/uploadheadimg?access_token=%s&kf_account=%s';

    public function __construct($accessToken, $account, $avatarImagePath = null)
    {
        $this->url = sprintf($this->url, $accessToken, $account);
        if ($avatarImagePath) {
            $this->setImagePath($avatarImagePath);
        }
        $this->setMethod('GET');
    }

    public function setImagePath($avatarImagePath)
    {
        $this->setBody(['media' => new \CURLFile($avatarImagePath)]);
    }

}