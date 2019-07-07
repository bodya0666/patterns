<?php

namespace App;

interface Mail
{
   public function sendMail(string $email, string $subject, string $message): void;
}