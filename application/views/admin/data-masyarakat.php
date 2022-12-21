<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
                <a href="<?php echo site_url('admin/DataMasyarakat/tambah') ?>" class="btn bg-red"><i class="fa fa-plus-circle"> Tambah Data User </i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>NIK</th>
                  <th>Password</th>
                  <th>Tanggal Input</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_masyarakat = 1; foreach($tabel as $table) : ?>
                        <tr>
                            <td><?php echo $id_masyarakat++ ?></td>
                            <td><?php echo $table->nama ?></td>
                            <td><?php echo $table->nik ?></td>
                            <td><?php echo $table->password ?></td>
                            <td><?php echo $table->tanggal_input ?></td>
                            <td><?php echo $table->level ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/DataMasyarakat/edit/'. $table->id_masyarakat); ?>" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                                <a href="<?php echo site_url('admin/DataMasyarakat/hapus/'. $table->id_masyarakat); ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>