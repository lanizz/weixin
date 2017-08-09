<?php
/**
 *
 * User: Jinming
 * Date: 2017/8/4
 * Time: 14:12
 */

namespace Lanizz\Weixin\CSMessage;


class WxCardMessage extends CSMessage
{
    public function __construct($toUser = '')
    {
        parent::__construct($toUser, 'wxcard');
        $this->wxcard = new \stdClass();
    }

    public function setCardId($cardId)
    {
        return $this->wxcard->card_id = $cardId;
    }
}