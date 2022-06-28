<?php

namespace Source\Interpretation;

class Product
{
    public $name;
    private $price;
    private $data;

    /**
     * @param $name
     * @param $value
     * @return void
     */
    public function __set ($name, $value)
    {
        $this->notFound(__FUNCTION__, $name);
        $this->data[$name] = $value; //mapear propriedade que não existe
    }

    /**
     * @param $name
     * @return mixed|void
     */
    public function __get($name)
    {
        if (!empty($this->data[$name]))
        {
            return $this->data[$name];
        }
        else
        {
            $this->notFound(__FUNCTION__, $name);
        }
    }

    /**
     * @param $name
     * @return void
     */
    public function __isset($name)
    {
        $this->notFound(__FUNCTION__, $name);
    }

    /**
     * @param $name
     * @param $arguments
     * @return void
     */
    public function __call($name, $arguments)
    {
        $this->notFound(__FUNCTION__, $name);
        var_dump($arguments);
    }

    /***
     * @return string
     */
    public function __toString()
    {
        //return é obrigatório
        return "<p class='trigger'>Este é um objeto da classe".__CLASS__."</p>";
    }

    /**
     * @param $name
     * @return void
     */
    public function __unset($name)
    {
        trigger_error(__FUNCTION__.": Acesso negado a propriedade {$name}",
         E_USER_ERROR);
    }

    /***
     * @param $name
     * @param $price
     * @return void
     */
    public function handler ($name, $price)
    {
        $this->name = $name;
        $this->price = number_format($price, 2, ".", ",");
    }

    private function notFound($method, $name)
    {
        echo "<p class='trigger error'>{$method}: A propriedade {$name} não existe em ". __CLASS__."!</p>";
    }
}