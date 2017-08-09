<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 16:52
 */

namespace Lanizz\Weixin\Request;


use Lanizz\Weixin\Menu\Menu;

class MenuCreateRequest extends Request implements IRequest
{
    protected $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=%s';

    public function __construct($accessToken, Menu $menu = null)
    {
        $this->url = sprintf($this->url, $accessToken);
        $this->setMethod('POST');
        $this->setMenu($menu);
    }

    public function setMenu(Menu $menu)
    {
        $this->setBody($menu->output());
    }

}