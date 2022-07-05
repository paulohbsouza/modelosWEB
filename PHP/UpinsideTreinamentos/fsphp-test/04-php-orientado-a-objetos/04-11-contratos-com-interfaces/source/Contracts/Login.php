<?php

namespace Source\Contracts;

class Login
{
    private $logged;

    /***
     * @param User $user
     * @return User
     */
    public function loginUser (User $user) : User // : retorna um 'User'
    {
        $this->logged = $user;
        return $this->logged;
    }

    /**
     * @param UserAdmin $user
     * @return UserAdmin
     */
    public function loginUserAdmin (UserAdmin $user) : UserAdmin // : retorna um 'UserAdmin'
    {
        $this->logged = $user;
        return $this->logged;
    }

    /**
     * @param UserInterface $user
     * @return UserInterface
     */
    // para todos os objetos que implementam a assinatura de User Interface (métodos)
    public function login (UserInterface $user) : UserInterface // : retorna um 'UserInterface'
    {
        $this->logged = $user;
        return $this->logged;
    }
}