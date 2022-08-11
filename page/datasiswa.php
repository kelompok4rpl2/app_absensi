<table class="table">
     <h4 class="mb-3">Data Siswa</h4>
     <a href="#" class="btn btn-primary btn-sm col-sm-3" data-bs-toggle="modal"data-bs-target="#datasekolah">Tambah Data</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Aksi</th>
      <th scope="col">Nisn</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">JK</th>
      <th scope="col">Alamat</th>
      <th scope="col">Agama</th/>
      <th scope="col">NO HP</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th class="text-center"><a href="#">edit</a> | <a href="#"> Hapus</a></td>
      <td>0047194353</td>
      <td>Asifah</td>
      <td>Perempuan</td>
      <td>Serang</td>
      <td>Islam</td>
      <td>083108356889</td>
    </tr>
    
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="datasekolah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form tambah data -->
        <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nisn</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama Siswa</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="namasiswa">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class ="form-label">JK</label>
          <select class="form-select"aria-label="Default select example">
            <option selected>Pilih Jenis Kelamin</option>
             <option value="1">Laki-laki</option>
             <option value="2">Perempuan</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Alamat</label>
          <textarea type="text" class="form-control" id="exampleInputPassword1" name="alamat"></textarea
      >
        </div>
        <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Agama</label>
             <select class="form-select" aria-label="Default select example">
             <option selected>pilih Agama</option>
             <option value="1">Islam<option>
             <option value="2">Kristen<option>
             <option value="3">Katolik<option>
          </select>
        </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="notep">
  </div>
</form>
        
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>