<?php

namespace App;

class Adapter extends Message implements Mail
{
    public function sendMail(string $email, string $subject, string $message): void
    {
        mail($email, $subject, $message);
    }

    public function messageAdapter(string $email): void
    {
        $message = json_decode($this->getMessage());

        $this->sendMail($email, $message->title, $message->message);
    }
}
