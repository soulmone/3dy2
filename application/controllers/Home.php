<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 13:44
 */
class Home extends  CI_Controller
{
   public  function  index() {
        echo  "hello" ;
   }
   public  function  test ($name = "My Test", $lastname = "Najaa") {
       echo "Myname is :" .$name." " .$lastname;

   }
}