<?php
/**
 * Http请求证书类
 * User: Jinming
 * Date: 2017/7/31
 * Time: 18:45
 */

namespace Lanizz\Weixin\Http;


class SSLFile
{
    private $certType = 'PEM';
    private $keyType = 'PEM';
    private $certFile;
    private $keyFile;
    private $password;

    public function __construct($certFile, $keyFile)
    {
        $this->certFile = $certFile;
        $this->keyFile = $keyFile;
    }

    public function setCertType($certType)
    {
        return $this->certType = $certType;
    }

    public function getCertType()
    {
        return $this->certType;
    }

    public function setKeyType($keyType)
    {
        return $this->keyType = $keyType;
    }

    public function getKeyType()
    {
        return $this->keyType;
    }

    public function setKeyFile($keyFile)
    {
        return $this->keyFile = $keyFile;
    }

    public function getKeyFile()
    {
        return $this->keyFile;
    }

    public function setCertFile($certFile)
    {
        return $this->certFile = $certFile;
    }

    public function getCertFile()
    {
        return $this->certFile;
    }

    public function setPassword($password)
    {
        return $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

}