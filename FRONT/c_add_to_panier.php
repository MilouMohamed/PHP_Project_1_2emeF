<?php 
  
       session_start();

    if (!isset($_SESSION["user"]))
        header("location:../connection.php");


if( isset( $_POST["id"]) &&  isset( $_POST["val"])  ){
    $id_user = $_SESSION["user"]->id;
 
    if (isset($_SESSION["panier"][$id_user][$_POST["id"]])) {
        $_SESSION["panier"][$id_user][$_POST["id"]] = [ 
            "id_p" => $_POST["id"],  
            "qtt"  => $_POST["val"]
            
        ];
    } else { 
        $_SESSION["panier"][$id_user][$_POST["id"]] = [
            "id_p" => $_POST["id"] ,
            "qtt"  => $_POST["val"]
        ];
    }

     
} 
 header("location:".$_SERVER['HTTP_REFERER']);



/*
    echo "<pre>";
    // print_r($_SESSION["user"]);
    echo "<br>** SESSION[panier] **<br>";
    print_r($_SESSION["panier"]); 
     
    echo "</pre>";
*/ 