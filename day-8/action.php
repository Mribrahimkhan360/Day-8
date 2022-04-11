<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
}
elseif (isset($_POST['submitBtn']))
{
    if ($POST['submitBtn'] == 'Submit')
    {
        $calculator = new Calculator($_POST);
        $calculator->myCalculator();
    }
}