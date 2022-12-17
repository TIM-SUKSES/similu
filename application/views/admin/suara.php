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
        <th>Pukul</th>
      </tr>
      </thead>
      <tbody>
          <?php $id_suara = 1; foreach($tabel as $table) : ?>
              <tr>
                  <td><?php echo $id_suara++ ?></td>
                  <td><?php echo $table->nama_user ?></td>
                  <td><?php echo $table->nama_kandidat ?></td>
                  <td><?php echo $table->tanggal_coblos ?></td>
                  <td><?php echo $table->waktu_coblos ?></td>
              </tr>
          <?php endforeach; ?>
      </tbody>
      </table>
  </div>
</div>
</script>