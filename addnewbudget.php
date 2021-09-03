<!-- Button trigger modal -->


<!-- Modal -->

<div class="modal fade" id="nbudgetModal" tabindex="-1" aria-labelledby="nbudgetModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nbudgetModalLabel">Budget</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action = "addnewbudgethandle.php" method = "post">
        <div class="mb-3">
            <label for="bname" class="form-label">Budget Name</label>
            <input type="text" class="form-control" id="bname" name = "bname" >
        </div>
        <div class="mb-3">
            <label for="npersons" class="form-label">Total number of Persons</label>
            <input type="text" class="form-control" id="nperson" name = "nperson">
        </div>
            <div class = "mb-3">
            <label for="npersons" class="form-label">Amount</label>
            <div class="input-group mb-3">
            <span class="input-group-text">₹</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name = "amount" id = "amount">
            <span class="input-group-text">.00</span>
            </div>
            </div>
           

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>