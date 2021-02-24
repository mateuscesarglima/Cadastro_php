
<?php

session_start();

include_once("connection.php");
include_once("url.php");


$data = $_POST;
// MODIFICAÇÕES NO BANCO
if(!empty($data)){

// Criar cadastro
if($data["type"] === "create"){
    
    $email = $data["email"];
    $name = $data["name"];
    $lastname = $data["lastname"];
    $password = $data["password"];

    $query = "INSERT INTO dados(email, name, lastname, password) VALUES (:email, :name, :lastname, :password)";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":password", $password);
 
    try{

        $stmt->execute();
        $_SESSION['msg'] = "Cadastro efetuado com sucesso";
    
    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "error: $error";
    }
}
header("Location:" . $BASE_URL . "../index.php");
}
    
$conn = null;



