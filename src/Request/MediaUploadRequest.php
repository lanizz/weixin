<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/1
 * Time: 18:45
 */

namespace Lanizz\Weixin\Request;


class MediaUploadRequest extends Request implements IRequest
{
    protected $url = 'https://api.weixin.qq.com/cgi-bin/media/upload?access_token=%s&type=%s';

    public function __construct($accessToken, $type, $path)
    {
        $this->url = sprintf($this->url, $accessToken, $type);
        $this->setMethod('POST');
        $this->setBody(['media' => new \CURLFile($path)]);
    }

}