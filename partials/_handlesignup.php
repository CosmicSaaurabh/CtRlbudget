<?php   
   $showerror = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
         include "_dbconnect.php";
         $username = $_POST['username'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $cpassword = $_POST['cpassword'];
        //  check whether user exists or not 
        $existsql = "select * from `users` where email = '$email'";
        $result = mysqli_query($conn,$existsql);
        $numrows = mysqli_num_rows($result);
        echo $numrows;
        if($numrows > 0){
            $showerror = "Email already in use";
            header("Location:/ctrlbudget/index.php?signupsuccess=false&error=$showerror");
        }else{
            $existsql = "select * from `users` where Username = '$username'";
            $result = mysqli_query($conn,$existsql);
            $numrows = mysqli_num_rows($result);
            if($numrows > 0){
                $showerror = "Username Already in Use";
                header("Location:/ctrlbudget/index.php?signupsuccess=false&error=$showerror");
            }else{
                if($password == $cpassword){
                       $sql = "INSERT INTO `Users` (`Username`, `email`, `password`, `dog`) VALUES ('$username', '$email', '$password', current_timestamp())";
                       $result = mysqli_query($conn,$sql);
                       if($result){
                           $showerror = "true";
                           header("Location:/ctrlbudget/index.php?signupsuccess=true");
                       }
                }else{
                    $showerror = "Passwords do not match";
                    header("Location:/ctrlbudget/index.php?signupsuccess=false&error=$showerror");
                }
            }
        }
    }



?>