<?php
/**
 *
 * User: Jinming
 * Date: 2017/7/29
 * Time: 17:38
 */

namespace Lanizz\Weixin\CSMessage;


interface ICSMessage
{
    public function output();
    public function setCustomAccount($account);
}