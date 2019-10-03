<!-- MODAL TAMBAH DATA MENU -->
<div id="tambah_menu" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Menu</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <label class="control-label col-sm-3" for="nomor">Kode Menu:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nomor" name="idmenu" value="<?= $if;?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="menu">Nama Menu:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="menu" name="nama_menu" placeholder="Nama Menu" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="menu">Harga Menu:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="menu" name="harga_menu" placeholder="Harga Menu" required>
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
<!-- END MODAL TAMBAH DATA MENU -->

<!-- MODAL TAMBAH DATA USER -->
<div id="tambah_user" class="modal fade" role="dialog">
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
            <label class="control-label col-sm-3" for="nomor">No : </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nomor" name="iduser" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="nama">Nama :</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="username">Username :</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="pass">Password :</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="pass" name="password" placeholder="Password" required>
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

<!-- MODAL TAMBAH DATA SUPPLIER -->
<div id="tambah_supplier" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Pemasok</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <label class="control-label col-sm-4" for="nomor">ID : </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="id_perusahaan" id="nomor" placeholder="ID" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="namaperusahaan">Nama Perusahaan : </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="nama_perusahaan" id="namaperusahaan" placeholder="Nama Perusahan" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="notelepon">No Telepon : </label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="no_telepon" id="notelepon" placeholder="Nomor Telepon" required>
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
<!-- END MODAL TAMBAH DATA SUPPLIER -->


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
