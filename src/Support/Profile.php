<?php
/**
 *
 * User: Jinming
 * Date: 2017/7/31
 * Time: 17:06
 */

namespace Lanizz\Weixin\Support;


class Profile
{
    private $appId;
    private $appSecret;
    private $customAccessTokenURL = '';
    private $cachePath;

    public function __construct($appId, $appSecret)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
        $this->cachePath = DIRECTORY_SEPARATOR=='\\' ? 'C:\Windows\Temp' : '/tmp';
    }

    public function setAppId($appId)
    {
        return $this->appId = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    public function setCachePath($cachePath)
    {
        return $this->cachePath = $cachePath;
    }

    public function getCachePath()
    {
        return $this->cachePath;
    }


    public function setAppSecret($appSecret)
    {
        return $this->appSecret = $appSecret;
    }

    public function getAppSecret()
    {
        return $this->appSecret;
    }

    public function setCustomAccessTokenURL($url)
    {
        return $this->customAccessTokenURL = $url;
    }

    public function getCustomAccessTokenURL()
    {
        return $this->customAccessTokenURL;
    }

}
