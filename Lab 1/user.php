<?php
class User
{
    public string $username;
    public int $password;
    public DateTime $birthday;

    public function __construct(string $username, int $password, string $birthday)
    {
        $this->username = $username;
        $this->password = $password;
        $this->birthday = new DateTime($birthday);
    }
}