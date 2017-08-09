<?php
/**
 * HTTP请求
 * User: Jinming
 * Date: 2017/7/31
 * Time: 19:23
 */

namespace Lanizz\Weixin\Http;
class HttpHelper
{
    public $connectTimeout = 30000;//30 second
    public $readTimeout = 80000;//80 second
    public $proxyConfig;
    public $SSLFile;

    public function curl($url, $httpMethod = "GET", $postFields = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $httpMethod);

        if ($this->proxyConfig) {
            curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_PROXY, $this->proxyConfig->getIP());
            curl_setopt($ch, CURLOPT_PROXYPORT, $this->proxyConfig->getPort());
            curl_setopt($ch, CURLOPT_PROXYTYPE, $this->proxyConfig->getType());
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

        if ($this->readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        }
        if ($this->connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }
        //https request
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        if (is_array($headers) && 0 < count($headers)) {
            $httpHeaders = $this->getHttpHeaders($headers);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeaders);
        }

        if ($this->SSLFile) {
            curl_setopt($ch, CURLOPT_SSLCERTTYPE, $this->SSLFile->getCertType());
            curl_setopt($ch, CURLOPT_SSLCERT, $this->SSLFile->getCertFile());
            curl_setopt($ch, CURLOPT_SSLKEYTYPE, $this->SSLFile->getKeyType());
            curl_setopt($ch, CURLOPT_SSLKEY, $this->SSLFile->getKeyFile());
            curl_setopt($ch, CURLOPT_SSLKEYPASSWD, $this->SSLFile->getPassword());
        }
        $httpResponse = new HttpResponse();
        $httpResponse->setBody(curl_exec($ch));
        $httpResponse->setStatus(curl_getinfo($ch, CURLINFO_HTTP_CODE));
        if (curl_errno($ch)) {
            throw new \Exception("The server can not reached.");
        }
        curl_close($ch);
        return $httpResponse;
    }


    public function getHttpHeaders($headers)
    {
        $httpHeader = array();
        foreach ($headers as $key => $value) {
            array_push($httpHeader, $key.":".$value);
        }
        return $httpHeader;
    }

    public function setConnectTimeout($secondTime)
    {
        return $this->connectTimeout = $secondTime * 1000;
    }

    public function setReadTimeout($secondTime)
    {
        return $this->readTimeout = $secondTime * 1000;
    }

    public function setProxyConfig($proxyConfig)
    {
        if ($proxyConfig instanceof ProxyConfig) {
            $this->proxyConfig = $proxyConfig;
            return true;
        }
        throw new \Exception('proxy config file is not correct');

    }

    public function setSSLFile($sslFile)
    {
        if ($sslFile instanceof SSLFile) {
            $this->SSLFile = $sslFile;
            return true;
        }
        throw new \Exception('SSL file is not correct');
    }
}