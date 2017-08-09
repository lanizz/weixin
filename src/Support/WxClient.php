<?php
/**
 *
 * User: Jinming
 * Date: 2017/7/31
 * Time: 17:18
 */

namespace Lanizz\Weixin\Support;


use Lanizz\Weixin\Http\HttpHelper;
use Lanizz\Weixin\Request\IRequest;

class WxClient
{
    static public function getWxResponse(IRequest $request)
    {
        $httpClient = new HttpHelper();
        $response = $httpClient->curl($request->getURL(), $request->getMethod(), $request->getBody(), $request->getHeaders());
        if (!$response->isSuccess())
            throw new \Exception('Request server failure.');

        $wxResponse = new WxResponse();
        if ('RAW' == $request->getAcceptFormat()) {
            $wxResponse->setBody($response->getBody());
            $wxResponse->setErrCode(0);
            $wxResponse->setErrMsg('ok');
            return $wxResponse;
        }
        $body = self::parseResponse($response->getBody(), $request->getAcceptFormat());
        $wxResponse->setErrCode(isset($body->errcode) ? $body->errcode : 0);
        $wxResponse->setErrMsg(isset($body->errmsg) ? $body->errmsg : 'ok');
        $wxResponse->setBody($body);
        return $wxResponse;
    }

    static public function parseResponse($body, $format)
    {
        if ('RAW' == $format)
            return $body;
        return json_decode($body);
    }


}