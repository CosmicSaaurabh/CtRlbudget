<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">SignUp</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

       <!-- login form -->
      <form action = "partials/_handlesignup.php" method = "post">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name = "username">
                </div>
                <div class="mb-3">
                    <label for="Email1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name = "email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="Password1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password1" name = "password">
                </div>
                <div class="mb-3">
                    <label for="Password1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword1" name = "cpassword">
                </div>
               
                <button type="submit" class="btn btn-success">Submit</button>
       </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>