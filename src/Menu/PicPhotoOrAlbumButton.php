<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/7
 * Time: 10:43
 */

namespace Lanizz\Weixin\Menu;


class PicPhotoOrAlbumButton extends KeyButton
{
    public function __construct($name)
    {
        parent::__construct($name, 'pic_photo_or_album');
    }
}