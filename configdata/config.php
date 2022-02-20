<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','e_classe_db');


$config = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//if($config == false){
//     die("votre base de donnée est non connecté". mysqli_connect_error());
// }else{
//     echo "votre base de donnée connecté avec succées";
// }

