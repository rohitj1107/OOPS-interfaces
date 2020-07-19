<?php

interface a{
  function hello($n);
}

interface c{
  function hi($n);
  function bye();
}

class b implements a,c {
  function hello ($n){
      echo 'Hello '.$n.'<br>';
  }
  function hi($n){
      echo 'Hi '.$n.'<br>';
  }
  function bye(){
      echo 'bye ';
  }
}
$obj = new b;
$obj->hello('Rohit');
$obj->hi('Ram');
$obj->bye();

?>
