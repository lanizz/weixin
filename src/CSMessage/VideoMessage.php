<?php
/**
 *
 * User: Jinming
 * Date: 2017/7/29
 * Time: 11:50
 */

namespace Lanizz\Weixin\CSMessage;


class VideoMessage extends CSMessage
{

    public function __construct($toUser = '')
    {
        parent::__construct($toUser, 'video');
        $this->video = new \stdClass();
    }

    public function setMediaId($mediaId)
    {
        $this->video->media_id = $mediaId;
    }

    public function setThumbMediaId($mediaId)
    {
        $this->video->thumb_media_id = $mediaId;
    }

    public function setTitle($title)
    {
        $this->video->title = $title;
    }

    public function setDescription($description)
    {
        $this->video->description = $description;
    }
}