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
                  <th>Kandidat</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Partai</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_calon = 1; foreach($tabel as $table) : ?>
                        <tr>
                            <td><?php echo $id_calon++ ?></td>
                            <td><?php echo $table->nama_kandidat ?></td>
                            <td>
                              <img src="<?php echo base_url('assets/img/'.$table->foto_presiden); ?>" width="100">
                            </td>
                            <td><?php echo $table->nama_calon ?></td>
                            <td>
                              <img src="<?php echo base_url('assets/img/'.$table->partai); ?>" width="100">  
                            </td>
                            <td>
                                <a href="<?php echo site_url('admin/DataPresiden/edit/'. $table->id_calon); ?>" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>