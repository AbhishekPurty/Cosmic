<?php
     include("connection.php");
     $sql = "select * from people";
     $result = mysqli_query($conn, $sql);

     session_start();
     
     

     
     $flag = 0;

     while($row = mysqli_fetch_object($result)){

     if($_SESSION["user"] == $row->user && $_POST["pass"] == $row->pass){

        $_SESSION["status"] = "Passive";
        $name = $_SESSION['user'];
        $func = mysqli_query($conn, "delete from people where user = '$name' ");
        unset($_SESSION['user']);
        header("Location: /home.php");
        $flag = 1;
        break;
     
     }
    
     }

     if($flag == 0)
        header("Location : /home.php");
        

   
    
   
?>