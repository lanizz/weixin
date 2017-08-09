<?php
/**
 *
 * User: Jinming
 * Date: 2017/7/29
 * Time: 11:13
 */

namespace Lanizz\Weixin\CSMessage;


class TextMessage extends CSMessage
{
    public function __construct($toUser = '')
    {
        parent::__construct($toUser, 'text');
        $this->text = new \stdClass();
    }

    public function setContent($content)
    {
       $this->text->content = $content;
    }

}