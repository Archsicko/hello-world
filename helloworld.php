<?php
error_reporting(0);
session_start();
// session_destroy();

$str = 'abcdefghijklmnopqrstuvwxyz';
$shuffled = str_shuffle($str);

$singleAlphabet = substr($shuffled, 1, 1);
$stingLength = strlen($_SESSION['string']);
$_SESSION['word'] = "HelloWorld";



    if($singleAlphabet ==  strtolower(substr($_SESSION['word'], $stingLength, 1)))
    {
       
            $_SESSION['string']  = $_SESSION['string'].$singleAlphabet;
        

    }   

    
    if(strtolower(substr($_SESSION['word'], $stingLength, 1)) == "")
    {
        $_SESSION['string'] = $_SESSION['string'] . " ";
    }
    

    
    if($stingLength < strlen($_SESSION['word']))
    {
        header("refresh: 0");
        echo "<h1>".$_SESSION['string'].$singleAlphabet."</h1>";
    }else{
        echo "<h1>".strtoupper($_SESSION['string'])."</h1>";
    }