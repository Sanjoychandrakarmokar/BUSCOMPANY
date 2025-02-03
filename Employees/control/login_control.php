<?php
session_start();
include '../model/mydb.php';

if(isset($_POST["login"])){

    $nid=$_POST["nid"];
    $password=$_POST["password"];
    $mydb= new mydb();
    $conobj = $mydb->createConObject();
    $result = $mydb->login($conobj,'regemp',$nid,$password);
    if($result > 0){
        $_SESSION["nid"] = $nid;
        header("Location: ../view/home.php");
        
        /*if(password_verify($password,$data["password"])){
       $_SESSION["nid"] = $nid;
       header("Location: ../view/home.php");
        }
        else{
            echo "wrong password";
        }*/
    }
    else{
        echo "user not found";
    }
    $mydb->closeCon($conobj);
}

?>