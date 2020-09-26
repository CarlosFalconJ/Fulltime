<?php

include "helper.php";
  
try {

    $email = $_POST["email"];

    if(!validarEmail($email)){
        echo 'Email inválido!';
    }else{

        salvarEmailNoBanco($email); 
        echo "Email ",$email," salvo com sucesso"; 
       
    } 

    
} catch (\PDOException $e) {
    die($e->getMessage());
}



