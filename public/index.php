<?php

 require '../vendor/autoload.php';
 
use App\Wcs\Sayhello;


 $sayhello = new Sayhello ();
 echo $sayhello->world();
 
//  $hello = new Hello();
//  echo $hello->talk();


// class SayHello
// {
//     public static function world()
//     {
//         return 'Hello World, Composer!';
//     }
// }