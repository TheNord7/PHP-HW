<?php

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = FALSE;
    private User $user;

    public function __construct(string $description, int $priority = 0, User $user) 
    {
        $this->description = $description;
        $this->dateCreated = new DateTime();
        $this->priority = $priority;
        $this->user = $user;
    }
 
    public function getDescription()
    {
        return $this->description;
    }
 
    public function setDescription(string $description)
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
        return $this;
    }

    public function getIsDone()
    {
        return $this->isDone;
    }
 
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
 
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }
 
    public function getDateDone()
    {
        return $this->dateDone;
    }
 
    public function getPriority()
    {
        return $this->priority;
    }
 
    public function getUser()
    {
        return $this->user;
    }

    public function markIsDone(bool $isDone)
    {
        $this->isDone = $isDone;
        if ($isDone == TRUE) {
            $this->dateDone = new DateTime();
        } elseif ($isDone == FALSE) {
            $this->dateUpdated = new DateTime();
        }
        return $this;
    }
}