<?php

namespace App;

class Message
{
    private $message = 'Hello world!';

    private $title = 'Simple title';

    public function getMessage()
    {
        return json_encode(['title' =>$this->title, 'message' => $this->message]);
    }
}
