<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/2
 * Time: 20:58
 */

namespace Lanizz\Weixin\CSMessage;


class MusicMessage extends CSMessage
{
    /**
     * 实例化一个音乐消息体
     *
     * @param string $toUser 接收者openid
     */
    public function __construct($toUser = '')
    {
        parent::__construct($toUser, 'music');
        $this->music = new \stdClass();
    }

    /**
     * 设置音乐的标题
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->music->title = $title;
    }

    /**
     * 设置音乐的描述或说明
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->music->description = $description;
    }

    /**
     * 设置音乐链接地址
     *
     * @param string $url
     */
    public function setMusicUrl($url)
    {
        $this->music->musicurl = $url;
    }

    /**
     * 设置高质量音乐的链接地址，WIFI环境优先使用该链接播放音乐
     *
     * @param string $url
     */
    public function setHQMusicUrl($url)
    {
        $this->music->hqmusicurl = $url;
    }

    /**
     * 设置音乐的缩略图，需要先通过素材接口上传图片
     *
     * @param string $mediaId
     */
    public function setThumbMediaId($mediaId)
    {
        $this->music->thumb_media_id = $mediaId;
    }
}