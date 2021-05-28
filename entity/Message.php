<?php

class Message
{
    private $id;
    private $header;
    private $body;
    private $messageStatus;
    private $sender;
    private $receiver;
    private $sendDate;

    public function getId()
    {
        return $this->id;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function setHeader($header)
    {
        return $this->header = $header;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        return $this->body = $body;
    }

    public function getMessageStatus()
    {
        return $this->messageStatus;
    }

    public function setMessageStatus($messageStatus)
    {
        return $this->messageStatus = $messageStatus;
    }

    /**
     * sender id : eventually we need an instance of the user entity
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * receiver id : eventually we need an instance of the user entity
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    public function getSendDate()
    {
        return $this->sendDate;
    }

    public function setSendDate($sendDate)
    {
        return $this->sendDate = $sendDate;
    }
}
