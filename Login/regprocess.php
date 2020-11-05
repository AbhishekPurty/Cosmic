<?php
     include("connection.php");
     $sql = "select * from people";
     $result = mysqli_query($conn, $sql);

     session_start();
     $_SESSION["status"] = "Passive";
     
     $flag = 0;

     while($row = mysqli_fetch_object($result)){

     if($_POST["reguser"] == $row->user){

        
        $flag = 1;
     
     }

     
     }

    if($flag == 0){
     $name = $_POST["reguser"];
     $word = $_POST["regpass"];
     $email = $_POST["regemail"];

     $func = mysqli_query($conn, "insert into people(user,pass,email) values('$name', '$word', '$email')");
            
        $_SESSION["user"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["status"] = "Active";
        header("Location: /index.php");
        exit;

    
     
     
    }
    
    else{
         header("Location: /Login/loginuserexists.php");
     }
?>