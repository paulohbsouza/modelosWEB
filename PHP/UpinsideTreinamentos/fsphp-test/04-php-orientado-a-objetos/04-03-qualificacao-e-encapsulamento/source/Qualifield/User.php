<?php

namespace Source\Qualifield;

class User
{
    private $firstName;
    private $lastName;
    private $email;

    private $error;

    /**
     * @param $firstName
     * @param $lastName
     * @param $email
     * @return bool
     */
    public function setUser($firstName, $lastName, $email)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);

        if(!$this->setEmail($email))
        {
            $this->error = "O e-mail {$this->getEmail()} não é válido!";
            return false;
        }
        return true;
    }

    /**
     * @return mixed
     */
     public function getErro()
    {
        return $this->error;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $firstName
     * @return void
     */
    private function setFirstName($firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param $lastName
     * @return void
     */
    private function setLastName($lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Valida o e-mail do usuários em um formato válido!
     * @param mixed $email
     * @return bool
     */
    private function setEmail($email)
    {
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
