<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <?= $this->session->flashdata('message'); ?>
      <h3 class="box-title"><?php echo $title ?></h3>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/VisiMisi/update'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_visimisi" value="<?php echo $row->id_visimisi ?>">

        <div class="form-group">
          <label for="id_kandidat">Nama Kandidat</label>
          <select name="id_kandidat" id="id_kandidat" class="form-control">
            <?php foreach ($capres as $c) : ?>
              <option value="<?php echo $c->id_calon ?>" <?php echo $row->id_kandidat == $c->id_calon ? 'selected' : '' ?>><?php echo $c->nama_kandidat ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="visi">Visi</label>
          <textarea name="visi" id="visi" class="form-control ckeditor" required><?php echo $row->visi ?></textarea>
        </div>
        
        <div class="form-group">
          <label for="misi">Misi</label>
          <textarea name="misi" id="misi" class="form-control ckeditor" required><?php echo $row->misi ?></textarea>
        </div>

        <a href="<?php echo site_url('admin/VisiMisi') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-pencil-square-o"></i> Ubah</button>
      </form>
    </div>
  </div>
</section>