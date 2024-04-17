<?php

  function generatePass($length){
    
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    
    if(empty($length)){
      return 'Inserisci solo un valore numerico';
    }elseif($length < 8 || $length > 32){
      return 'Inserire un valore compreso tra 8 e 32';
    }
    
    $base_string = createBaseString($letters, $numbers, $symbols);

    $password = getPassword($base_string, $length);

    $password = str_replace('<', '&lt', $password);
    $password = str_replace('>', '&gt', $password);

    session_start();
    

    return $password;
  };

  function getPassword($base_string, $length){
    $password = '';

    while(strlen($password) < $length) {
      $index = rand(0, strlen($base_string) - 1);
      $password .= $base_string[$index];
    }

    return $password;
  }

  function createBaseString($letters, $numbers, $symbols){
    return $letters . strtoupper($letters) . $numbers . $symbols;
  }
  ?>