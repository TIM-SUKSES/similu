<section class="content">
  <?php echo $title; ?>

  <div class="row">
        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Total Masyarakat</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>Total Pemilih</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-12">
              <div class="alert alert-warning alert-dismissible">
                <h4><i class="icon fa fa-warning"></i> Hasil Suara </h4>
                <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-success" style="text-decoration: none;"> <i class="fa fa-refresh"> Klik Untuk Update Hasil Suara </i> </a>
              </div>
    </div>
  </div>

  <div>
    <canvas id="HasilSuara"></canvas>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
          'rgba(255, 99, 132, 0.2)',
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