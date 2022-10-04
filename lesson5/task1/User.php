<?php

class User {
    private string $username;
    private string $email;
    private string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

    function __construct(string $username, string $email, string $sex = "none", int $age = 0)
    {
        $this->username = $username;
        $this->email = $email;
        $this->$sex = $sex;
        $this->$age = $age;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    
    public function getSex()
    {
        return $this->sex;
    }
 
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }
 
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }
  
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }
 
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
 
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }
}



