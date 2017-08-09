<?php
/**
 *
 * User: Jinming
 * Date: 2017/7/31
 * Time: 20:23
 */

namespace Lanizz\Weixin\Request;


interface IRequest
{
    public function getURL();
    public function getBody();
    public function getMethod();
    public function getSSLFile();
    public function getProxyConfig();
    public function getHeaders();
    public function getAcceptFormat();
}