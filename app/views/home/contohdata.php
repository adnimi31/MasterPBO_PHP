<div class="container">
<div class="jumbotron mt-3">
  <!-- letak alert atau pemberitahuan -->
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>


  <h1 class="display-4">Coba Database</h1>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary tambahdatamodal" data-toggle="modal" data-target="#tambahdatamodal">
  Tambah Data
</button>
<p></p>


<!-- Modal untuk tambah data -->
<div class="modal fade" id="tambahdatamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="labelmodal">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!-- forms -->
        <form action="<?=BASEURL; ?>/contohdata/tambah" method="post">
          <input type="hidden" id="id" name="id">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">No HP</label>
          <input type="text" class="form-control" id="nohp" name="nohp" placeholder="">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>        
      </form>
      </div>

    </div>
  </div>
</div>
<!-- End Modal untuk tambah data -->
  

  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No.HP</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ( $data['contohdata'] as $cthdata ) : ?>
    <tr>
      <th scope="row"><?= $cthdata['id'] ?></th>
      <td><?= $cthdata['nama'] ?></td>
      <td><?= $cthdata['alamat'] ?></td>
      <td><?= $cthdata['nohp'] ?></td>
      <td>
        <a class="btn btn-primary" href="<?=BASEURL; ?>/contohdata/detail/<?= $cthdata['id']; ?>" >Detail</a>
        <a class="btn btn-success ubahmodal" href="#" data-toggle="modal" data-target="#tambahdatamodal" data-id="<?= $cthdata['id']; ?>" >Ubah</a>
        <a class="btn btn-danger" href="<?=BASEURL; ?>/contohdata/hapus/<?= $cthdata['id']; ?>" onclick="return confirm('apa anda yakin ingin menghapus data ini?');" >Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>
</div>
