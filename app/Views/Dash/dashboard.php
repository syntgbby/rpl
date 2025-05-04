<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="pagetitle">
  <h1>Selamat Datang .....</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="row">
<div class="col-lg-6">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Bar CHart</h5>

      <!-- Bar Chart -->
      <canvas id="barChart" style="max-height: 400px;"></canvas>
      <script>
        document.addEventListener("DOMContentLoaded", () => {
          new Chart(document.querySelector('#barChart'), {
            type: 'bar',
            data: {
              labels: ['2020', '2021', '2022', '2023', '2024', '2025', '2026'],
              datasets: [{
                label: 'Bar Chart',
                data: [65, 59, 80, 81, 56, 55, ],
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 159, 64, 0.2)',
                  'rgba(255, 205, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                  'rgb(255, 99, 132)',
                  'rgb(255, 159, 64)',
                  'rgb(255, 205, 86)',
                  'rgb(75, 192, 192)',
                  'rgb(54, 162, 235)',
                  'rgb(153, 102, 255)',
                  'rgb(201, 203, 207)'
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
        });
      </script>
      <!-- End Bar CHart -->
    </div>
  </div>
</div>
<div class="col-md-6">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Calon Mahasiswa RPL<span> | Status</span></h5>
                <div class="">
                    <ul style="font-size: 14px;">
                        
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End Keterangan -->
</div>
  <?= $this->endSection(''); ?>