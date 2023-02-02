<?php

include("..\config\db_config.php");


if(!empty($_GET)){
    $error="";
    if(empty( empty($_GET['phonenumber']) || $_GET['name']) || empty($_GET['massage'])){
        $error.="<li>type your info</li>";
        header("location:..\Index.php?key_error=$error");
    }
    else{
        $name=$_GET['name'];
        $phonenumber=$_GET['phonenumber'];
        $massage=$_GET['massage'];
        // echo $name;
        $name_query="INSERT INTO `question` (`Phone_Number`, `Name`, `Ask_Question`) VALUES ('$phonenumber', '$name', '$massage')";
        if(mysqli_query($connection, $name_query)){

            // echo "Done";
            header("location:..\Index.php?message='Done'");
        }
        else{
            echo "Error" .$name_query .mysqli_error($connection);
        }

    }
}


// if(!empty($_GET)){
//     $error="";
//     if(empty($_GET['name'])){
//         $error.="<li>type your name</li>";
//         header("location:..\Index.php?key_error=$error");
//     }
//     else{
//         $name=$_GET['name'];
//         // echo $name;
//         $name_query="INSERT INTO question (Name) VALUES ('$name')";
//         if(mysqli_query($connection, $name_query)){

//             echo "Done";
//         }
//         else{
//             echo "Error" .$name_query .mysqli_error($connection);
//         }

//     }

//     if(empty($_GET['phonenumber'])){
//         $error.="<li>type your phonenumber</li>";
//         header("location:..\Index.php?key_error=$error");
//     }
//     else{
//         $phonenumber=$_GET['phonenumber'];
//         // echo $phonenumber;
//         $phonenumber_query="INSERT INTO question (Phone_Number) VALUES ('$phonenumber')";
//         if(mysqli_query($connection, $phonenumber_query)){

//             header("location:..\Index.php?message='Done'");
//         }
//         else{
//             echo "Error" .$phonenumber_query .mysqli_error($connection);
//         }
//     }
//     if(empty($_GET['massage'])){
//         $error.="<li>type your massage</li>";
//         header("location:..\Index.php?key_error=$error");
//     }
//     else{
//         $massage=$_GET['massage'];
//         // echo $massage;
//         $massage_query="INSERT INTO question (Ask_Question) VALUES ('$massage')";
//         if(mysqli_query($connection, $massage_query)){

//             header("location:..\Index.php?message='Done'");
//         }
//         else{
//             echo "Error" .$massage_query .mysqli_error($connection);
//         }
//     }
// }


?>