<?php 

echo'<div class="row">';
                 
$bid = $_GET['threadid'];
$havesql = "SELECT * FROM `updatebudget` WHERE thread_id = '$bid'";
$result = mysqli_query($conn,$havesql);
while($row = mysqli_fetch_assoc($result)){
     $update_name = $row['update_name'];
     $update_name = strtoupper($update_name);
     $paid_by = $row['paid_by'];
     $update_cost = $row['update_cost'];
     echo '<div class = "col-lg-4 my-3">

     <div class="card bg-secondary text-white" style="width: 18rem;">
   
       <div class="card-body">
         <h5 class="card-title">'.$update_name.'</h5>
       </div>

       <ul class="list-group list-group-flush">
         <li class="list-group-item"><b>Amount Spent: </b>'.$update_cost.'</li>
         <li class="list-group-item"><b>Paid by: </b>'.$paid_by.'</li>
         
         <li class="list-group-item"><b>Time: </b>'.$remm.'</li>
       </ul>

       <div class="card-body">
         
         <button class = "btn btn-success">Delete</button>
         
       </div>

     </div>


   </div>';

}
echo'</div>';


?>