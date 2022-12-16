<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
                <a href="<?php echo site_url('admin/VisiMisi/tambah') ?>" class="btn bg-red"><i class="fa fa-plus-circle"> Tambah Visi & Misi </i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Kandidat</th>
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $id_visimisi = 1; foreach($tabel as $table) : ?>
                        <tr>
                            <td><?php echo $id_visimisi++ ?></td>
                            <td><?php echo $table->nama_kandidat ?></td>
                            <td><?php echo $table->visi ?></td>
                            <td><?php echo $table->misi ?></td>
                            <td>
                                <a href="<?php echo site_url('admin/VisiMisi/edit/'. $table->id_visimisi); ?>" 
                                class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Ubah</a>
                                <a href="<?php echo site_url('admin/VisiMisi/hapus/'. $table->id_visimisi); ?>" 
                                class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash-o"></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
</div>
</script>