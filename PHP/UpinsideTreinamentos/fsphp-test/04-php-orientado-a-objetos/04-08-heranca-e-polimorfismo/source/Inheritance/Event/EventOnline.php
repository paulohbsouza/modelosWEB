<?php

namespace Source\Inheritance\Event;

class EventOnline extends Event
{
    private $link;

    /**
     * @param $event
     * @param \DateTime $date
     * @param $price
     * @param $link
     * @param $vacancies
     */
    public function  __construct($event, \DateTime $date, $price, $link, $vacancies = null)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    //polimorfar/sobrescrever(overwhite) com a mesma assinatura da classe que garante o polimorfismo
    /**
     * @param $fullName
     * @param $email
     * @return void
     */
    public function register($fullName, $email)
    {
        $this->vacancies +=1;
        $this->setRegister($fullName, $email);
        echo "<p class='trigger accept'>Show {$fullName}, cadastro com sucesso!</p>";
    }
}