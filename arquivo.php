<?php
 
class Handler
{
  public static function arrayHandler(){
    $a = [];

    $a['oi'] = $_POST['oi'];

    print_r($a);

    die();
  }

}