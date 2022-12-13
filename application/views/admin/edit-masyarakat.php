<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?php echo $title ?></h3>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/datamasyarakat/update'); ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_masyarakat" value="<?php echo $row->id_masyarakat ?>">
        <table id="table" width="30%">
          <tr>
            <td>
              <div class="form-group">
                <label for="nama">Nama <span class="text-danger">*</span></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required value="<?php echo $row->nama ?>">
              </div>
            </td>
          </tr> 
          <tr> 
            <td>
              <div class="form-group">
                <label for="nik">NIK <span class="text-danger">*</span></label>
                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" required value="<?php echo $row->nik ?>">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="tanggal_input">Tanggal Input <span class="text-danger">*</span></label>
                <input type="date" name="tanggal_input" id="tanggal_input" class="form-control" placeholder="Masukkan Tanggal Input" required value="<?php echo $row->tanggal_input ?>">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-group">
                <label for="level">Roles <span class="text-danger">*</span></label>
                <select name="level" class="form-control form-control-user">
                  <?php foreach ($roles as $r) { ?>
                  <option value="<?= $r['id_roles'];?>" <?php echo $row->level == $r['nama_roles'] ? 'selected' : '' ?>><?= $r['nama_roles'];?></option>
                  <?php } ?>
                </select>
              </div>
            </td>
          </tr>
        </table>

        <a href="<?php echo site_url('admin/datamasyarakat') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-pencil-square-o"></i> Ubah</button>
      </form>
    </div>
  </div>
</section>