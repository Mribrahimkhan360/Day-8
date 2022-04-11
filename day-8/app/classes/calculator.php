<?php

namespace App\classes;

class Calculator
{
    public $firstNumber;
    public $secondNumber;
    public $choice;
    public $message;

    public function __construct($data = null)
    {
        $this->firstNumber      = $data['first_number'];
        $this->secondNumber     = $data['second_number'];
        $this->choice           = $data['choice'];
    }

    public  function index(){
        header('location: action.php?page=home');
    }

    public function myCalculator()
    {
        echo $this->firstNumber;
    }

    public function add(){
        return $this->firstNumber + $this->secondNumber;
    }
    public function sub(){
        return $this->firstNumber - $this->secondNumber;
    }
}