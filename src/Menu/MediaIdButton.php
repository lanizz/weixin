<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 10:35
 */

namespace Lanizz\Weixin\Menu;


class MediaIdButton extends Button
{
    public function __construct($name)
    {
        parent::__construct($name, 'media_id');
    }

    public function setMediaId($mediaId)
    {
        return $this->media_id = $mediaId;
    }
}