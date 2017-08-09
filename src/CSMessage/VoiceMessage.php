<?php
/**
 *
 * User: Jinming
 * Date: 2017/7/29
 * Time: 17:42
 */

namespace Lanizz\Weixin\CSMessage;


class VoiceMessage extends CSMessage
{

    public function __construct($toUser = '')
    {
        parent::__construct($toUser, 'voice');
        $this->voice = new \stdClass();
    }

    public function setMediaId($mediaId)
    {
        $this->voice->media_id = $mediaId;
    }
}