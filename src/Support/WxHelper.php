<?php

/**
 *
 * User: Jinming
 * Date: 2017/8/1
 * Time: 18:59
 */

namespace Lanizz\Weixin\Support;
use Lanizz\Weixin\Request\AccessTokenRequest;

class WxHelper
{
    static $profile;

    static public function getAccessToken(Profile $profile)
    {
        self::$profile = $profile;
        $accessToken = self::getAccessTokenFromCache();
        if ($accessToken) return $accessToken;

        $request = new AccessTokenRequest($profile->getAppId(), $profile->getAppSecret(), $profile->getCustomAccessTokenURL());
        $response = WxClient::getWxResponse($request);
        if (!$response->isSuccess())
            throw new \Exception('Error occurred on request get access token');

        $body = $response->getBody();
        //缓存
        self::setAccessTokenToCache($body);
        return $body->access_token;
    }

    static public function getAccessTokenFromCache()
    {
        $cachePath = self::$profile->getCachePath().DIRECTORY_SEPARATOR.self::$profile->getAppID().'.access_token';
        if (!file_exists($cachePath))
            return null;
        $content = file_get_contents($cachePath);
        //小于10个字符可以断定文件数据不对
        if (strlen(trim($content)) < 10)
            return null;

        $token = json_decode($content);
        if (!$token || !isset($token->expire_in))
            return null;
        //已过期
        if ($token->expire_in - 10 < time())
            return null;
        return $token->access_token;
    }

    static public function setAccessTokenToCache($accessToken)
    {
        $arr = [
            'access_token' => $accessToken->access_token,
            'expire_in' => $accessToken->expires_in + time()
        ];
        $cachePath = self::$profile->getCachePath().DIRECTORY_SEPARATOR.self::$profile->getAppID().'.access_token';
        return file_put_contents($cachePath, json_encode($arr));
    }
}