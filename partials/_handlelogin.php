<?php 
     $showerror = "false";
     if($_SERVER["REQUEST_METHOD"] == "POST"){
           include "_dbconnect.php";
           $username = $_POST['username'];
           $password = $_POST['password'];
        //    echo $username;
        //    echo '<br>';
        //    echo $password;
           $sql = "SELECT * FROM `Users` WHERE Username = '$username'";
           $result = mysqli_query($conn,$sql);
        //    echo '<br>';
        //    if($result){
        //        echo "success";
        //    }else{
        //        echo "failure";
        //    }
           $numrows = mysqli_num_rows($result);
        //    echo $numrows;
           if($numrows == 0){
                  $showerror = "User does not found!";
                  header("Location:/ctrlbudget/index.php?loginsuccess=false&error=$showerror");
           }else{
               
               $row = mysqli_fetch_assoc($result);
               if($password != $row['password']){
                     $showerror = "Please enter correct password";
                     header("Location:/ctrlbudget/index.php?loginsuccess=false&error=$showerror");
               }else{
                   session_start();
                   $_SESSION['login'] = true;
                   $_SESSION['username'] = $username;
                   
                   header("Location:/ctrlbudget/index.php?loginsuccess=true");
               }
           }


     }
 

?>