
<!-- MODAL TAMBAH DATA PELANGGAN -->
<div id="tambah_pelanggan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data User</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <label class="control-label col-sm-3" for="nama">Nama :</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-group">
              <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </div>
          </div>
        </form> 
      </div>
    </div>
  </div>
</div>
<!-- END MODAL TAMBAH DATA USER -->


<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Yakin ?</h4>
      </div>
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
