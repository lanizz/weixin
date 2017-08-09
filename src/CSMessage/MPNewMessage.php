<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/4
 * Time: 11:16
 */

namespace Lanizz\Weixin\CSMessage;


class MPNewMessage extends CSMessage
{
    public function __construct($toUser = '')
    {
        parent::__construct($toUser, 'mpnews');
        $this->mpnews = new \stdClass();
    }

    public function setMediaId($mediaId)
    {
        return $this->mpnews->media_id = $mediaId;
    }
}