<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
       <!-- login form -->
      <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
              
                <button type="submit" class="btn btn-success">Submit</button>
       </form>

       
      </div>
      <div class="modal-footer">
         
           
          <button type="button" class="btn btn-outline-success mx-2"  data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-dismiss="modal">
         SignUp
         </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
            
   


   
          
         
       
        
      
      </div>
    </div>
  </div>
</div>