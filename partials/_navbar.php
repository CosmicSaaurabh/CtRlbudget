<?php
   session_start();
   echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
     <a class="navbar-brand" href="#">CtRlBudget</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Idea</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">About Us</a>
         </li>
        
         <li class="nav-item">
           <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Donate</a>
         </li>
       </ul>';
       if(isset($_SESSION['login']) and $_SESSION['login'] == 'true'){
            echo'<form class="d-flex">
            <button type="button" class="btn btn-success mx-2">'.$_SESSION['username'].'</button>
            <a href = "partials/_logout.php">  <button type="button" class="btn btn-outline-success mx-2">
              Log out
             </button></a>
         
            </form>';
       }else{
            echo '<form class="d-flex">
            <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">
              SignUp
              </button>
            <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
             </button>
         
            </form>';
       }
       
    echo '</div>
   </div>
 </nav>';
 include 'partials/_login.php';
 include 'partials/_signup.php';
 

    // if user have successfuly logged in
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
          echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
          <strong>Holy guacamole!</strong> You have successfully signed up, Now you can login.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }else if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == 'false'){
        $error = $_GET['error'];
      echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
      <strong>Error -> </strong>'.$error.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true"){
      echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
      <strong>Welcome! </strong>'.$_SESSION['username'].'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}else if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == 'false'){
    $error = $_GET['error'];
  echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
  <strong>Error -> </strong>'.$error.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

    

?>
