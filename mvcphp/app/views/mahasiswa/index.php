<div class="container mt-2">
    <div class="row">
        <div class="col-lg-6">
            <?php popMessage::pop();?>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary ButtonInsertData" data-toggle="modal" data-target="#formModal">
                Tambah Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6">
            <form action="<?php echo 'http://localhost/mvcphp/public/mahasiswa/search'?>" method="post">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary" type="submit" id="buttonSearch">Search</button>
                </div>
              </div>    
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs): ?>
                <li class="list-group-item ml-2">
                  <?php echo $mhs['nama'];?>
                  <span class="badge badge-primary"><a href="<?php echo 'http://localhost/mvcphp/public/mahasiswa/detail/' . $mhs['id']; ?>" class="">detail</a></span>
                  <span class="badge badge-danger float-end"><a href="<?php echo 'http://localhost/mvcphp/public/mahasiswa/delete/' . $mhs['id']; ?>" class="" onclick="return confirm('Apakah Kamu Yakin?')">Delete</a></span>
                  <span class="badge badge-warning float-end tampilModalUbah" data-id="<?php echo $mhs['id'];?>"><a href="<?php echo 'http://localhost/mvcphp/public/mahasiswa/getubah/' . $mhs['id']; ?>" class="" data-toggle="modal" data-target="#formModal">Ubah</a></span>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="http://localhost/mvcphp/public/mahasiswa/insert" method="post">
          <input type="hidden" name='id' id='id'>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas">
                <option value="IF-43-12">IF-43-12</option>
                <option value="IF-43-12 (INT)">IF-43-12 (INT)</option>
                <option value="IF-43-12 (Sunda)">IF-43-12 (Sunda)</option>
                <option value="IF-43-12 (Rusia)">IF-43-12 (Rusia)</option>
                </select>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>