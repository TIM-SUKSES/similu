<section class="content">
  <?php echo $title; ?>

  <div class="row">
    <div class="col-md-4">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $total_user; ?></h3>

          <p>Total User</p>
        </div>
        <div class="icon">
          <i class="fa fa-group"></i>
        </div>
        <a href="<?= site_url('admin/DataUser'); ?>" class="small-box-footer">Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-md-4">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?= $total_suara; ?></h3>

          <p>Total Suara</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="<?= site_url('admin/suara'); ?>" class="small-box-footer">Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-md-4">
      <!-- small box -->
      <div class="small-box bg-purple">
        <div class="inner">
          <h3><?= $total_kandidat; ?></h3>

          <p>Jumlah Kandidat</p>
        </div>
        <div class="icon">
          <i class="bi bi-people-fill"></i>
        </div>
        <a href="<?= site_url('admin/DataPresiden'); ?>" class="small-box-footer">Selanjutnya <i class="fa fa-arrow-circle-right"></i></a>
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
    <canvas id="HasilSuara" height="100"></canvas>
  </div>
</section>

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
          <?= $capres1; ?>,
          <?= $capres2; ?>,
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