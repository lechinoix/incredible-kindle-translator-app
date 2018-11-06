<?php

namespace App\Entity;

class username
{
    protected $pseudonym;
    protected $password;

    public function getPseudo()
    {
        return $this->pseudonym;
    }

    public function setTask($pseudonym)
    {
        $this->pseudonym = $pseudonym;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}