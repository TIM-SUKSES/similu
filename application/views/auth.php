<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="welcome display-4">Selamat Datang <br> di website SIMILU</h2>
            <p class="welcome2">Silahkan login menggunakan NIK yang sudah terdaftar pada E-KTP <br> harap masyarakat sudah melakukan pendaftaran sensus penduduk. </p>
            <a href="" class="btn btn-light shadow-sm" data-toggle="modal" data-target="#modalLogin"> <i class="fa fa-sign-in"></i> Login / Masuk </a>
        </div>
        <div class="col-md-6">
            <img src="<?php echo base_url('assets/img/Logo SIMILU2.png'); ?>" class="img-fluid">
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan NIK Anda!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('auth/login'); ?>" method="post">
            <div class="form-group">
                <label for="nik" class="text-secondary">NIK *</label>
                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK Anda" required>
            </div>
            <div class="form-group">
                <label for="password" class="text-secondary">PASSWORD *</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda" required>
            </div>
            <button type="submit" class="btn btn-danger"> <i class="fa fa-sign-in"></i> Login / Masuk </button>
        </form>
      </div>
    
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
