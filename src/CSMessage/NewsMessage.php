<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/4
 * Time: 11:15
 */

namespace Lanizz\Weixin\CSMessage;


class NewsMessage extends CSMessage
{
    public function __construct($toUser = '')
    {
        parent::__construct($toUser, 'news');
        $this->news = new \stdClass();
        $this->news->articles = [];
    }

    public function addArticle(NewsArticle $article)
    {
        if (7 < $this->news->articles($article))
            return false;
        return $this->news->articles[] = $article;
    }

    public function deleteArticle($index){
        if ($index > 7 || $index < 0)
            return false;
        if (!isset($this->news->articles[$index]))
            return true;
        unset($this->news->articles[$index]);
        return ture;
    }

    public function getArticles()
    {
        return $this->news->articles;
    }
}

