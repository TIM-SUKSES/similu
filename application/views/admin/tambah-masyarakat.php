<section class="content">

<?php echo $title; ?>

<div class="box">
            <div class="box-header">
                <?= $this->session->flashdata('message'); ?>
                <a href="<?php echo site_url('admin/datamasyarakat') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
                <button type="button" class="btn bg-maroon" id="btn_tambah_form"> Tambah Masyarakat</button>
            </div>
            <!-- header -->
            <div class="box-body">
                <form action="<?php echo site_url('admin/datamasyarakat/simpan'); ?>" method="post">
                <table id="table" width="30%">
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="nama">Nama *</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" style="margin-top: 10px; margin-left: 10px;"><i class="fa fa-minus-circle"></i></button>
                        </td>
                    </tr>

                </table>
                </form>
            </div>
</div>
</script>