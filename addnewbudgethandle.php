<?php 
    session_start();
   if($_SERVER['REQUEST_METHOD'] == "POST"){
       include "partials/_dbconnect.php";
       $uid = $_SESSION['userid'];
       
       $bname = $_POST['bname'];
       $nperson = $_POST['nperson'];
       $amount = $_POST['amount'];
    //    echo $uid;
    //    echo '<br>';
    //    echo $bname;
    //    echo '<br>';
    //    echo $nperson;
    //    echo '<br>';
    //    echo $amount;
    //    echo '<br>';

       $sql = "INSERT INTO `budgets` (`userid`, `budgetname`, `nperson`, `amount`) VALUES ('$uid', '$bname', '$nperson', '$amount')";
       $result = mysqli_query($conn,$sql);
       if($result){
            header("Location:/ctrlbudget/thread.php?userid=$uid");
       }
    //    echo $result;
    //    if($result){
    //        echo 'success';
    //    }else{
    //        echo 'failure';
    //    }
    
      
   }







?>