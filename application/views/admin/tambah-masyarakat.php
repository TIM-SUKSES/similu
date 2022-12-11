<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <?= $this->session->flashdata('message'); ?>
      <a href="<?php echo site_url('admin/datamasyarakat') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/datamasyarakat/simpanmasyarakat'); ?>" method="post" enctype="multipart/form-data">
        <table id="table" width="30%">
          <tr>
            <td>
              <div class="form-group">
                <label for="nama">Nama <span class="text-danger">*</span></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
              </div>
            </td>
          </tr> 
          <tr> 
            <td>
              <div class="form-group">
                <label for="nik">NIK <span class="text-danger">*</span></label>
                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" required>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="tanggal_input">Tanggal Input <span class="text-danger">*</span></label>
                <input type="date" name="tanggal_input" id="tanggal_input" class="form-control" placeholder="Masukkan Tanggal Input" required>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="level">Roles <span class="text-danger">*</span></label>
                <select name="level" class="form-control form-control-user" required>
                  <?php foreach ($roles as $r) { ?>
                  <option value="<?= $r['id_roles'];?>"><?= $r['nama_roles'];?></option>
                  <?php } ?>
                </select>
              </div>
            </td>
          </tr>
        </table>
        <button type="reset" class="btn"><i class="fa fa-refresh"></i> Reset</button>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-save"></i> Simpan</button>
      </form>
    </div>
  </div>
</section>