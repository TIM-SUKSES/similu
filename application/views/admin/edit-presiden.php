<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?php echo $title ?></h3>
    </div>
    <!-- header -->
    <div class="box-body">
      <?php echo form_open_multipart('admin/datapresiden/update');?>
        <input type="hidden" name="id_calon" value="<?php echo $row->id_calon ?>">

        <div class="row">
          <div class="col-md-3">
            <img src="<?php echo base_url('assets/img/' . $row->partai); ?>" alt="" class="img-fluid" style="width: 200px;">
          </div>
          <div class="col-md-9">
            <div class="form-group">
              <label for="nama_kandidat">Nama Kandidat</label>
              <input type="text" name="nama_kandidat" id="nama_kandidat" class="form-control" value="<?php echo $row->nama_kandidat ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama_calon">Nama Presiden</label>
              <input type="text" name="nama_calon" id="nama_calon" class="form-control" value="<?php echo $row->nama_calon ?>">
            </div>
            <div class="form-group">
              <label for="partai">Nama Presiden</label>
              <input type="file" name="partai" id="partai" class="form-control">
            </div>
          </div>
        </div>

        <a href="<?php echo site_url('admin/datapresiden') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-pencil-square-o"></i> Ubah</button>
      </form>
    </div>
  </div>
</section>