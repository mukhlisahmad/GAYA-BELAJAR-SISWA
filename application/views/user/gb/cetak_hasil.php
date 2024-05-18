<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
@media print {
	#no-print {
        display: none !important;
    }
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .card {
        width: 100%;
        border: none;
        box-shadow: none;
    }

    .container {
        width: 100%;
        margin: auto;
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;

    }

    th, td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    h3 {
        margin-top: 0;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .col-md-6 {
        width: 50%;
    }

    canvas {
        max-width: 100%;
        height: auto;
    }

    .page-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .table-responsive {
        overflow-x: auto;
    }
}

    </style>
</head>
<body>
    <section>
        <div class="card">
            <div class="container">
                <div id="page-wrapper">
                        <div class="card-header">
                            <div class="col-lg-12">
                                <img width="100px" src="<?php echo base_url('assets/') ?>img/lg-epc.png" alt="">
                            </div>
                        </div>
						<center>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table">
                                            <tr>
                                                <th>NIK</th>
                                                <td>:</td>
                                                <td><?php echo $akun['nik']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama</th>
                                                <td>:</td>
                                                <td><?php echo $akun['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Usia</th>
                                                <td>:</td>
                                                <td><?php echo $akun['usia']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table">
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <td>:</td>
                                                <td><?php echo $akun['jk']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Instansi</th>
                                                <td>:</td>
                                                <td><?php echo $akun['instansi']; ?></td>
                                            </tr>
											<?php foreach ($hasil_konsultasi as $hasil): ?>
											<tr>
											<th>Tanggal Tes</th>
												<td>:</td>
												<td><?php echo $hasil['created_at']; ?></td>
											</tr>
                                        </table>
                                    </div>
                                </div>
                                <table>
                                    <thead >
                                        <tr>
                                            <th>Auditory</th>
                                            <th>Kinesthetic</th>
                                            <th>Visual</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                            <tr>
                                                <td><?php echo $hasil['persen_auditory']; ?>%</td>
                                                <td><?php echo $hasil['persen_kinesthetic']; ?>%</td>
                                                <td><?php echo $hasil['persen_visual']; ?>%</td>

                                            </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
						<div class="card-body">
					<div class="col-lg-12">
						<h3><b>Saran Untuk Metode Pembelajaran</b></h3>
						<div class="row">
							<div class="col-md-4">
								<table style="width:100%; border-collapse: collapse;">
									<tr>
										<td>
											<canvas id="myChart" width="300" height="300"></canvas>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table style="width:100%; border-collapse: collapse;">
									<tr>
										<td>
											<?php echo $hasil['saran']; ?>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
</div>

					</center>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Auditory', 'Kinesthetic', 'Visual'],
        datasets: [{
          label: 'Percentage',
          data: [
            <?php echo $hasil['persen_auditory']; ?>,
            <?php echo $hasil['persen_kinesthetic']; ?>,
            <?php echo $hasil['persen_visual']; ?>
          ],
          backgroundColor: [
            'rgba(255, 99, 132, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 206, 86, 0.5)'
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
        responsive: false,
        maintainAspectRatio: false
      }
    });
  </script>
   <?php endforeach;?>
   <script>

	setTimeout(function() {

        window.print();

    }, 1500);

</script>

