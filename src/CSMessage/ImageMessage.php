<?php
/**
 *
 * User:
 * Date: 2017/7/29
 * Time: 17:42
 */

namespace Lanizz\Weixin\CSMessage;


class ImageMessage extends CSMessage
{
    public function __construct($toUser = '')
    {
        parent::__construct($toUser, 'image');
        $this->image = new \stdClass();
    }

    public function setMediaId($mediaId)
    {
        $this->image->media_id = $mediaId;
    }
}