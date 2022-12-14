<section class="sec1" id="sec1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="padding-top">
          <img src="<?php echo base_url('assets/img/'.$capres->foto_presiden);?>" class="img-circle">
          <h2 class="display-4 text-white mt-5 mb-5 h2-sec2 text-center"><?php echo $capres->nama_calon;?></h2>

          <table class="table">
            <tr class="text-light">
              <th>Visi</th>
                <td>
                  <?php echo $visimisi->visi?>
                </td>
            </tr>
            <tr class="text-light">
                <th>Misi</th>
                <td>
                  <?php echo $visimisi->misi?>
                </td>
              </tr>
          </table>

          <a href="<?php echo site_url('home')?>" class="btn btn-light">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</section>