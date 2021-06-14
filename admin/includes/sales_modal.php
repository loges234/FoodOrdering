<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Cancelling...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="sales_delete.php">
                <input type="hidden" class="salesid" name="id">
                <div class="text-center">
                    <p>Do you want to cancel this order?</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Cancel Order</button>
              </form>
            </div>
        </div>
    </div>
</div>



     