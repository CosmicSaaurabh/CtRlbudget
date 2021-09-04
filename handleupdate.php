<?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){
          include 'partials/_dbconnect.php';
          $title = $_POST['description'];
          $amount = $_POST['amount'];
        //   echo $amount;
        //   echo '<br>';
          $paidby = $_POST['paidby'];
          $bid = $_GET['threadid'];
          $newsql = "SELECT `nperson` FROM `budgets` WHERE bid = '$bid'";
          $newresult = mysqli_query($conn,$newsql);
          $newrow = mysqli_fetch_assoc($newresult);
          $sql = "INSERT INTO `updatebudget`(`thread_id`, `update_name`, `update_cost`, `paid_by`, `time_of_update`) VALUES ('$bid','$title','$amount','$paidby',current_timestamp())";
          $result = mysqli_query($conn,$sql);
        //   if($result) echo 'success';
        //   else  echo 'failure';
          $getquery = "SELECT `person1`, `person2`, `totol_person1`, `total_person2` FROM `personsdata` WHERE thread_id = '$bid'";
          $result1 = mysqli_query($conn,$getquery);
        //   if($result1) echo 'success again';
        //   else echo 'failure again';
          $row = mysqli_fetch_assoc($result1);

          $newsql = "SELECT `nperson` FROM `budgets` WHERE bid = '$bid'";
          $newresult = mysqli_query($conn,$newsql);
          $newrow = mysqli_fetch_assoc($newresult);
        //   echo $newrow['nperson'];

          if($newrow['nperson'] == 1){
                   $person = $row['person1'];
                   $tperson = $row['totol_person1'];
                   $person = $person + $amount;
                   $tperson = $tperson + $amount;
                   $sql = "UPDATE `personsdata` SET `person1`='$person',`totol_person1`='$tperson' WHERE thread_id = '$bid'";
                   $result = mysqli_query($conn,$sql);
                   echo 'we ae in this';
          }else{
            $person1 = $row['person1'];
            $person2 = $row['person2'];
            $tperson1 = $row['totol_person1'];
            $tperson2 = $row['total_person2'];
            if($paidby == 1){
                  $tperson1  = $tperson1 + $amount;
                  $half = $amount / 2;
                  $person1 = $person1 + $half;
                  $person2 = $person2 - $half;
            }else{
              $tperson2  = $tperson2 + $amount;
              $half = $amount / 2;
              $person2 = $person2 + $half;
              $person1 = $person1 - $half;
            }
            $sql = "UPDATE `personsdata` SET `person1`='$person1',`person2`='$person2',`totol_person1`='$tperson1',`total_person2`='$tperson2' WHERE thread_id = '$bid'";
            $result = mysqli_query($conn,$sql);
            echo 'we are in that';

          }
          header("Location:/ctrlbudget/updatebudget.php?threadid=$bid");
           
     }
 
?>