<?php
header('Content-type:application/json;charset=utf-8'); 

//if (isset($_POST["mail"]) && !empty($_POST["mail"])){
    $repjs = json_encode( ['reponse' => $_POST["nom"], 'num' => $_POST["num"], 'email' => $_POST["mail"], 'mesage' => $_POST["msg"],  ]);
    // echo json_encode( ['num' => $_POST["num"]]);
    echo $repjs; 
//}

$name =  $_POST["nom"];  
$num =  $_POST["num"]; 
$mail =  $_POST["mail"]; 
$message =  $_POST["msg"]; 

//mail("gerente.perfecto@gmail.com", $name ,"De: ".$name." | mail: ".$mail." | numéro: ".$num." | message: ".$message ); 
  
mail( "gerente.perfecto@gmail.com", $name ," ".$name." | mail: ".$mail." | numéro: ".$num." | message: ".$message ); 

