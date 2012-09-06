<?php
// src/Bulahov/TestBundle/Entity/Task.php
namespace Bulahov\TestBundle\Entity;

class Task
{
    protected $subject;
    protected $body;
    protected $email;
    
    public function getSubject()
    {
        return $this->subject;
    }
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    public function getBody()
    {
        return $this->body;
    }
    public function setBody($body)
    {
        $this->body = $body;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
}