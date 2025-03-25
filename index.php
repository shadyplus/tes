<?php
  if (!isset($rawClick)){
    header('Location: https://www.google.com/');
    exit();
  } 
  else {
    require_once('land.html');
  }
?>