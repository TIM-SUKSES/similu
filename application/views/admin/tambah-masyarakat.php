<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <?= $this->session->flashdata('message'); ?>
      <a href="<?php echo site_url('admin/datamasyarakat') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
      <button type="button" class="btn bg-maroon" id="btn_tambah_form"><i class="fa fa-plus-circle"> Tambah Data</i></button>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/datamasyarakat/simpan'); ?>" method="post">
        <table id="table" width="30%">
          <tr>
            <td>
              <div class="form-group">
                <label for="nama">Nama <span class="text-danger">*</span></label>
                <input type="text" name="nama[]" id="nama" class="form-control" placeholder="Masukkan Nama" required>
              </div>
            </td>
            <td>
              <button type="button" class="btn btn-danger btn-sm" id="btn_minus" style="margin-top: 10px; margin-left: 10px;" disabled><i class="fa fa-minus-circle"></i></button>
            </td>
          </tr>
        </table>
        <button type="reset" class="btn"><i class="fa fa-refresh"></i> Reset</button>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-save"></i> Simpan</button>
      </form>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
    $('#btn_tambah_form').on('click', function () {
      $('#table').append(`
        <tr>
          <td>
            <div class="form-group">
              <label for="nama">Nama <span class="text-danger">*</span></label>
              <input type="text" name="nama[]" id="nama" class="form-control" placeholder="Masukkan Nama" required>
            </div>
          </td>
          <td>
            <button type="button" class="btn btn-danger btn-sm" id="btn_minus" style="margin-top: 10px; margin-left: 10px;"><i class="fa fa-minus-circle"></i></button>
          </td>
        </tr>
      `);
    })

    $('#table').on('click', '#btn_minus', function () {
      $(this).closest("tr").remove();
    })    
  });
</script>