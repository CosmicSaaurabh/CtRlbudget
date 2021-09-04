<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->

<!-- Modal -->
<?php 
echo '<div class="modal fade" id="upModal" tabindex="-1" aria-labelledby="upModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action = "handleupdate.php?threadid='.$bid.'" method = "post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" name = "description">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cost</label>
        <input type="text" class="form-control" id="description" placeholder="Spent Amount" name = "amount">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Paid By</label>
        <input type="text" class="form-control" id="description" placeholder="Enter 1 for person1 and 2 for person2" name = "paidby">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>';
?>