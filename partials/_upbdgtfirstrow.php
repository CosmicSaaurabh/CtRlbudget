<?php
              //  session_start();
                
                echo ' <div class="row">
                    <div class = "col-lg-4 my-3">
                        <div class="card text-dark bg-warning" style="max-width: 18rem;">
                            <div class="card-header"><h4>Update Your budget</h4></div>
                            <div class="card-body">
                            <button type="button" class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#upModal"">
                               update
                            </button>
                            </div>
                        </div>
                    </div>';



                    $bid = $_GET['threadid'];
                    // echo $bid;
                    $sql  = "SELECT * FROM `personsdata` WHERE thread_id = '$bid'";
                    $result = mysqli_query($conn,$sql);
                    $numrows = mysqli_num_rows($result);
                    
                    // sql for budgets table
                    $sql2 = "SELECT * FROM `budgets` WHERE bid = '$bid'";
                    $result2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $bname = $row2['budgetname'];
                    $bname = strtoupper($bname);
                    $tamount = $row2['amount'];
            
                    



                        if($numrows == 0){
                          $val = 0;
                          $sql3 = "INSERT INTO `personsdata`(`thread_id`, `person1`, `person2`, `totol_person1`, `total_person2`) VALUES ('$bid','$val','$val','$val','$val')";
                          $result3 = mysqli_query($conn,$sql3);
                        }
                        $sql3  = "SELECT `person1`, `person2`, `totol_person1`, `total_person2` FROM `personsdata` WHERE thread_id = '$bid'";
                        $result3 = mysqli_query($conn,$sql3);
                        $arr =  $result3 -> fetch_array(MYSQLI_NUM);
                       

                        $remm = $arr[2] + $arr[3];
                        // $len = count($arr);
                        
                       

                        

                        echo '<div class = "col-lg-4 my-3">

                          <div class="card bg-secondary text-white" style="width: 26rem;">

                            <div class="card-body">
                              <h5 class="card-title">'.$bname.'</h5>
                            </div>

                            <ul class="list-group list-group-flush">
                             <li class="list-group-item"><b>Total Amount: </b>'.$tamount.'</li>';
                             if($remm <= $tamount){
                                echo ' <li class="list-group-item text-success"><b>Expended: </b>'.$remm.'</li>';
                             }else{
                              echo ' <li class="list-group-item text-danger"><b>Expended: </b>'.$remm.'</li>';
                             }
                            
                               $nperson = $row2['nperson'];
                               $cnt = 1;
                               $vv = 0;
                               $i = 2;
                               while($nperson > 0){
                                    echo '<li class="list-group-item"><b>Person '.$cnt.': </b>'.$arr[$i].'</li>';
                                    $nperson--;
                                    $i++;
                                    
                                    $cnt++;
                               }
                              echo'</ul>
                            <div class="card-body">
                              <button class = "btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#upModal">Update</button>
                           
                              
                            </div>

                          </div>
                 

                        </div>';
                        
                        $sql = "SELECT * FROM `personsdata` WHERE thread_id = '$bid'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($result);
                        $newsql = "SELECT `nperson` FROM `budgets` WHERE bid = '$bid'";
                        $newresult = mysqli_query($conn,$newsql);
                        $newrow = mysqli_fetch_assoc($newresult);
                        echo' <div class="col-lg-4 my-3">
                        <div class="container-fluid bg-dark text-white p-5">
                        <h3 class = "display-10">Who owes whom?</h3>
                        <p class="lead"><b>MOTTO: </b>Dont let the other person wait for his money too long!</p>
                        <hr class="my-4">';
                        if($newrow['nperson'] == 1){
                          echo ' <h5>Your bill is settled up!</h4>';

                        }else{
                          if($row['person1'] == $row['person2']){
                            echo ' <h5>Your bill is settled up!</h4>';
                          }else if($row['person1'] > 0){
                            echo'<h5>Person2 owes <mark> Rs. '.$row['person1'].'</mark> to Person1</h4>';
                          }else {
                              echo'<h5>Person1 owes <mark> Rs. '.$row['person2'].'</mark> to Person2 </h4>';
                          }

                        }
                       
                     
                        
                   echo' </div>
                    </div>';
                         

                  echo '</div>';
                
                
               
               ?>