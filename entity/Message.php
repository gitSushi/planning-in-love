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

    public function getSender()
    {
        return $this->sender;
    }

    public function setSender($sender)
    {
        return $this->sender = $sender;
    }

    public function getReceiver()
    {
        return $this->receiver;
    }

    public function setReceiver($receiver)
    {
        return $this->receiver = $receiver;
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
