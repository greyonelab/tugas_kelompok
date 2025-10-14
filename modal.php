  <!-- modal daftar -->
  <div class="modal fade" id="modalDaftar" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title"><i class="fas fa-user-plus"></i> Daftar Kursus</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <form method="POST" action="simpan_data_pendaftaran.php" style="padding: 20px;">

            <div class="form-group mb-3">
                <label for="nama">Nama : </label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group mb-3">
                <label for="umur">Umur : </label>
                <input type="number" class="form-control" id="umur" name="umur" required>
            </div>

            <div class="form-group mb-3">
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value=""></option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="no_hp">No HP : </label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>

            <div class="form-group mb-3">
                <label for="alamat">Alamat : </label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            
            <div class="form-group mb-3">
                <label for="kursus">kursus : </label>
                <select class="form-control" name="kursus" id="kursus" required>
                    <option value=""></option>
                    <option value="mern">MERN Stack</option>
                    <option value="laravel">Laravel</option>
                    <option value="flutter">Flutter</option>
                    <option value="kotlin">kotlin</option>
                    <option value="basic">basic pemograman</option>
                    <option value="figma">figma</option>
                </select>
            </div>
            <div class="justify-content-start d-flex gap-2">
                <p class="text-muted">Dengan mengisi form ini, Anda setuju untuk mengikuti kursus yang dipilih dan memahami syarat dan ketentuan yang berlaku.</p>
            </div>
                        <div class="justify-content-end d-flex gap-2">
            <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal"> batal</button>
            <button type="submit" class="btn btn-info text-white" >Submit</button>
            </div>

        </form>
      </div>
    </div>
  </div>