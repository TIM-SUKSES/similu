<section class="content">

<?php echo $title; ?>

<div class="box">
  <div class="box-header">
      <?= $this->session->flashdata('message'); ?>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Kandidat</th>
        <th>Tanggal Input</th>
      </tr>
      </thead>
      <tbody>
          <?php $id_suara = 1; foreach($tabel as $table) : ?>
              <tr>
                  <td><?php echo $id_suara++ ?></td>
                  <td><?php echo $table->nama_user ?></td>
                  <td><?php echo $table->nama_kandidat ?></td>
                  <td><?php echo $table->tanggal_input ?></td>
                  <td>
                      <a href="<?php echo site_url('admin/Suara/hapus/'. $table->id_suara); ?>" 
                      class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                  </td>
              </tr>
          <?php endforeach; ?>
      </tbody>
      </table>
  </div>
</div>
</script>