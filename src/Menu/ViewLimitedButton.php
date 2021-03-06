<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 10:26
 */

namespace Lanizz\Weixin\Menu;


class ViewLimitedButton extends Button
{
    public function __construct($name)
    {
        parent::__construct($name, 'view_limited');
    }

    public function setMediaId($mediaId)
    {
        return $this->media_id = $mediaId;
    }

}