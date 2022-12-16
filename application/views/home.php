<section class="sec1" id="sec1">
  <div class="container">
    <h2 class="display-4 text-center text-white mb-5 padding-top">Perolehan Suara</h2>
    <div>
      <canvas id="HasilSuara" height="150"></canvas>
    </div>
  </div>
</section>

<section class="sec2" id="sec2">
  <div class="container">
    <h2 class="display-4 text-center text-white mt-5 mb-5">Pemilihan Suara</h2>
    <div class="row">
      <?php foreach($capres as $cap) : ?>
        <div class="col-md-4 mx-auto">
          <div class="card mb-3">
            <img src="<?php echo base_url('assets/img/'.$cap->foto_presiden) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center text-primary font-weight-bold"><?php echo $cap->nama_kandidat; ?></h5>
              <p class="card-text text-center text-secondary"><?php echo $cap->nama_calon; ?></p>
              <div class="d-flex justify-content-between">
                <a href="<?php echo site_url('home/visimisi/' . $cap->id_calon); ?>" class="btn btn-primary">Lihat Visi & Misi</a>

                <?php if($user->status == 0) :?>
                    <a href="#" class="btn btn-success" data-nama_kandidat="<?php echo $cap->nama_kandidat ?>" data-id_user="<?php echo $this->session->userdata('id_masyarakat'); ?>">Pilih <?php echo $cap->nama_kandidat; ?></a>
                <?php else :?>
                    <button class="btn btn-success" disabled>Pilih <?php echo $cap->nama_kandidat; ?></button>
                <?php endif; ?>
              
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan NIK Anda!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('auth/login'); ?>" method="post">
            <div class="form-group">
                <label for="nik" class="text-secondary">NIK *</label>
                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK Anda" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('HasilSuara');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['CAPRES NO. 1', 'CAPRES NO. 2'],
      datasets: [{
        label: '# Hasil Suara',
        data: [
          <?php echo $capres1; ?>,
          <?php echo $capres2; ?>
        ],
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)'
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
