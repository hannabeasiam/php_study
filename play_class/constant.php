<?php

  //define function used bool define(string $name, mixed $value [, bool $case_insensitive = false ])
  //constant is global variable, I can use in any php filesize
  define("Hello", "Hello world.");
  echo Hello;
  //echo HELLO; since constant is case sensitive in default, it will cause error  

  define("GREETING", "Hello you.", true); //true makes case insensitive
  echo GREETING;
  echo greeting;

  /*Note the use of quotes, below example is checking
   *if the string 'TEST' is the name of a constant named TEST */
  define("TEST", "Already Defined"); //to check weather or not if constant variable already defiend
  if (defined('TEST')) {
	echo TEST;
  }
?>
