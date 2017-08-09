<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/4
 * Time: 11:23
 */

namespace Lanizz\Weixin\CSMessage;


class NewsArticle{
    private $title;
    private $description;
    private $url;
    private $picurl;

    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function setUrl($url)
    {
        return $this->url = $url;
    }

    public function setPicUrl($url)
    {
        return $this->picurl = $url;
    }
}