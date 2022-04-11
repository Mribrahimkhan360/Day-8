<?php
require_once 'vendor/autoload.php';
use App\classes\calculator;
$value = [
    'first_number' => 100,
    'second_number' => 50
];


$calculator = new Calculator($value);
$calculator->index();