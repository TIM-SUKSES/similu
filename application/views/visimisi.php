<section class="sec1" id="sec1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="<?php echo base_url('assets/img/'.$capres->partai);?>" class="img-circle">
        <h2 class="display-4 text-white mt-5 h2-sec2 text-center"><?php echo $capres->nama_calon;?></h2>

        <table class="table">
          <tr>
            <th>Visi</th>
            <td>
              <?php echo $visimisi->visi;?>
            </td>
            <th>Misi</th>
            <td>
              <?php echo $visimisi->misi;?>
            </td>
          </tr>
        </table>

        <a href="<?php echo site_url('home')?>" class="btb btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</section>