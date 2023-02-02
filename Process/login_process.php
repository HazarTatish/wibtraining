<?php

include("..\config\db_config.php");


if(!empty($_POST)){

$error="";

if(empty($_POST['username']) || empty($_POST['password'])){

    $error.="username or passwoed can not be empty";
}
if($error != ""){
    header("location:../login.php?error=$error");
}
else{
   
    $username= strtolower($_POST['username']);
    $password= $_POST['password'];

    $userQuery= "SELECT * FROM manager WHERE password = '$password' AND username='$username'";

    if(mysqli_query($connection, $userQuery)){

        $user_res= mysqli_query($connection, $userQuery);
       if(mysqli_num_rows($user_res)==1){
            // echo "whatever";
            $data= mysqli_fetch_assoc($user_res);
            // $id=$data['id'];
            $id_man= $data['id'];
            // echo $data['id'];

            /// manager acceess
            session_start();
            $_SESSION['user_id']=$data['id'];
            $_SESSION['username']=$data['username'];
            // echo  $_SESSION['user_id'];
            header("location:../manager_home.php");




        }
        else{
            $info="username is not found";
            header("location:..\login.php?info=$info");
        }

        // echo "Done";
        // header("location:..\login.php?message='Done'");
    }
    else{
        echo "Error" .$userQuery .mysqli_error($connection);
    }

}

}






?>