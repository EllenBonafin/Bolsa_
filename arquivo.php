<?php

class Handler{
  public static function arrayHandler($dados)
  {
    $a = [];
    $a['name'] = $dados["name"];
    

    return $a;
  }
}
?>