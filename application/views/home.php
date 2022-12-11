<div class="container">
    <h2 class="display-4 text-white mt-5 h2-sec1 text-center">Perolehan Suara</h2>
    <canvas id="HasilSuara"></canvas>
</div>

<div class="container">
    <h2 class="text-white mt-5 h2-sec1 text-center">Voting</h2>
    <div class="row text-center">
      <?php foreach($capres as $cap): ?>
          
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo base_url('assets/img/'.$cap->partai); ?>" class="card-img-top" alt="...">
            <div class="card-body mb-3">
              <h5 class="card-title font-weight-bold"><?php echo $cap->id_calon; ?></h5>
              <p class="card-text text-secondary"><?php echo $cap->nama_calon; ?></p>
              <a href="<?php echo('home/visimisi'.$cap->id_calon);?>" class="btn btn-primary">Visi & Misi</a>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
    </div>
</div>

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
 

<script>
  const ctx = document.getElementById('HasilSuara');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['CAPRES KE-1', 'CAPRES KE-2'],
      datasets: [{
        label: '# Hasil Suara',
        data: [20, 32,],
        backgroundColor: [
          'rgba(250, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)'
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