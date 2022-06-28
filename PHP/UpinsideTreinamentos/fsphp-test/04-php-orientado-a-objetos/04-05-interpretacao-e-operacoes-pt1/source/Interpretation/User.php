<?php

namespace Source\Interpretation;

class User
{
    private $firstName;
    private $lastName;
    private $email;

    /**
     * @param $firstName
     * @param $lastName
     * @param $email
     */
    public function __construct ($firstName,$lastName, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * @return void
     */
    public function __clone ()
    {
        $this->firstName = null;
        $this->lastName = null;
        echo "<p class='trigger'>Clonou!</p>"; //não usar echo na classe (boas práticas)
    }

    /**
     *
     */
    public function __destruct()
    {
        var_dump($this);
        echo "<p class='trigger accept'>O objeto {$this->firstName} foi destruido</p>>"; //não usar echo
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}