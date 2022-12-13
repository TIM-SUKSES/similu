<section class="sec1" id="sec1">
  <div class="container">
<<<<<<< HEAD
    <div class="row">
      <div class="col-md-12">
        <h2 class="display-4 text-white mt-5 h2-sec1 text-center">Perolehan Suara</h2>
        <canvas id="HasilSuara" width="400" height="200"></canvas>
      </div>
=======
    <h2 class="display-4 text-center text-white mb-5">Perolehan Suara</h2>
    <div>
      <canvas id="HasilSuara"></canvas>
>>>>>>> dbad61abe49339ef28ba8d37f1506d0c2a37c130
    </div>
  </div>
</section>

<<<<<<< HEAD
<section class="sec2" id="sec2">  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="display-4 text-white mt-5 h2-sec2 text-center">Calon</h2>
      </div>
    </div>
    <div class="row text-center">
      <?php foreach($capres as $cap): ?>
            
        <div class="col-md-4">
            <div class="card">
              <img src="<?php echo base_url('assets/img/'.$cap->partai); ?>" class="card-img-top" alt="...">
              <div class="card-body mb-3">
                <h5 class="card-title font-weight-bold"><?php echo $cap->id_calon; ?></h5>
                <p class="card-text text-secondary"><?php echo $cap->nama_calon; ?></p>
                <a href="<?php echo('home/visimisi/'.$cap->id_calon);?>" class="btn btn-primary">Visi & Misi</a>
              </div>
            </div>
          </div>

=======
<section class="sec2" id="sec2">
  <div class="container">
    <h2 class="display-4 text-center text-white mt-5 mb-5">Voting</h2>
    <div class="row">
      <?php foreach($capres as $cap) : ?>
        <div class="col-md-4">
          <div class="card mb-3" style="width: 18rem;">
            <img src="<?php echo base_url('assets/img/'.$cap->foto_presiden) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center text-primary font-weight-bold"><?php echo $cap->nama_kandidat; ?></h5>
              <p class="card-text text-center text-secondary"><?php echo $cap->nama_calon; ?></p>
              <div class="d-flex justify-content-between">
                <a href="<?php echo site_url('home/visimisi/' . $cap->id_calon); ?>" class="btn btn-primary">Lihat Visi & Misi</a>
                <a href="#" class="btn btn-success">Pilih <?php echo $cap->nama_kandidat; ?></a>
              </div>
            </div>
          </div>
        </div>
>>>>>>> dbad61abe49339ef28ba8d37f1506d0c2a37c130
      <?php endforeach; ?>
    </div>
  </div>
</section>
<<<<<<< HEAD
      
=======

>>>>>>> dbad61abe49339ef28ba8d37f1506d0c2a37c130
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
      labels: ['CAPRES KE-1', 'CAPRES KE-2', 'CAPRES KE-3'],
      datasets: [{
        label: '# Hasil Suara',
        data: [25, 18, 30],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
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
