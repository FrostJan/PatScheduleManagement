<!-- Add -->
<div class="modal fade" id="event_entry_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Add New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form method="POST" action="../controller/dashboardController.php">
        <input type="hidden" id="request_id" name="request_id">
        <input type="hidden" id="users_id" name="users_id">
        <div class="modal-body">
          <div class="img-container">
            <div class="row">
              <div class="col-sm-12">  
                <div class="form-group">
                  <label for="event_name">Event name</label>
                  <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Enter your event name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">  
                <div class="form-group">
                  <label for="event_start_date">Event start</label>
                  <input type="date" name="event_start_date" id="event_start_date" class="form-control onlydatepicker" placeholder="Event start date">
                 </div>
              </div>
              <div class="col-sm-6">  
                <div class="form-group">
                  <label for="event_end_date">Event end</label>
                  <input type="date" name="event_end_date" id="event_end_date" class="form-control" placeholder="Event end date">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="add" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delte_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Delete Data Event / See Details Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form method="POST" action="../controller/dashboardController.php">
        <div class="modal-body">
          <div class="img-container">
            <div class="row">
              <div class="col-sm-12">  
                <br>
                <div class="form-group text-center">
                  <button type="button" class="btn btn-success seedetails">Click This Button To See Details</button>
                  <!-- <button type="submit" name="delete" class="btn btn-danger">Click This Button to Delete Data</button> -->
                  <input type="hidden" name="event_id" id="event_id" class="form-control" placeholder="Enter your event name">
                  <input type="hidden" id="see_request_id" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="submit" name="delete" class="btn btn-primary">Save</button> -->
        </div>
      </form>
    </div>
  </div>
  </div>

