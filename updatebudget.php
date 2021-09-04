<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css file -->
    <link href = "style.css" rel = "stylesheet" type = "text/css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style> 
     .bgthread{
         background-color : rgba(0, 255, 191, 0.22);
         min-height : 650px;
     }
                       
   </style>
  </head>
  <body>
            <?php 
              include 'partials/_dbconnect.php';
              include 'partials/_navbar.php';
   
            ?>
            <div class="container-fluid bgthread  m-0" >   
             <?php
              //  session_start();
                
                echo ' <div class="row">
                    <div class = "col-lg-4 my-3">
                        <div class="card text-dark bg-warning" style="max-width: 18rem;">
                            <div class="card-header"><h4>Update Your budget</h4></div>
                            <div class="card-body">
                            <button type="button" class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#nbudgetModal">
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
                    $remm = $row2['remain'];
                    



                    if($numrows == 0){
                          $val = 0;
                          $sql3 = "INSERT INTO `personsdata`(`thread_id`, `person1`, `person2`) VALUES ('$bid','$val','$val')";
                          $result3 = mysqli_query($conn,$sql3);
                        }
                        $sql3  = "SELECT `person1`, `person2` FROM `personsdata` WHERE thread_id = '$bid'";
                        $result3 = mysqli_query($conn,$sql3);
                        $arr =  $result3 -> fetch_array(MYSQLI_NUM);
                        
                        
                        

                        echo '<div class = "col-lg-4 my-3">

                          <div class="card bg-secondary text-white" style="width: 26rem;">

                            <div class="card-body">
                              <h5 class="card-title">'.$bname.'</h5>
                            </div>

                            <ul class="list-group list-group-flush">
                             <li class="list-group-item"><b>Total Amount: </b>'.$tamount.'</li>
                             <li class="list-group-item"><b>Expended: </b>'.$remm.'</li>';
                               $nperson = $row2['nperson'];
                               $cnt = 1;
                               $vv = 0;
                               $i = 0;
                               while($nperson > 0){
                                    echo '<li class="list-group-item"><b>Person '.$cnt.': </b>'.$arr[$i].'</li>';
                                    $nperson--;
                                    $i++;
                                    
                                    $cnt++;
                               }
                              echo'</ul>
                            <div class="card-body">
                              <a href="updatebudget.php?threadid='.$bid.'" class="card-link"><button class = "btn btn-success">Update</button></a>
                              <a href="#" class="card-link"><button class = "btn btn-success">Delete</button></a>
                              
                            </div>

                          </div>
                 

                        </div>';
                   echo' <div class="col-lg-4 my-3">
                        <div class="container-fluid bg-dark text-white p-5">
                        <h3 class = "display-10">Who owes whom?</h3>
                        <p class="lead"><b>MOTTO: </b>Dont let the other person wait for his money too long!</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        
                    </div>
                    </div>';
                         

                  echo '</div>';
                
                
               
               ?>
                </div>
               
         

              
             <?php include 'partials/_footer.php' ?>

          


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>