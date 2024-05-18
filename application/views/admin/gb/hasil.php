
<?php
$this->load->view('main/header');
$this->load->view('main/navbar');
?>
<section>
<div class="card">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="container">

    <div id="page-wrapper">
	<div class="card-header">
            <div class="col-lg-12">
				<!-- <a target="_blank"href="<?=base_url('C_user/cetak_gb');?>" id="no-print" class="btn btn-primary btn-lg"> cetak pdf</a> -->
            </div>
			<button  class="btn btn-primary text-white" id="download"><i class="fas fa-download"></i> Download PDF</button>
        </div>
	<div id="dt">
        <div class="card-header">
		<div class="col-lg-12" style="text-align: center;">
    <img width="100px" src="<?php echo base_url('assets/') ?>img/logopmii.png" style="margin-right: 40px;" alt="">
    <img width="200px" src="<?php echo base_url('assets/') ?>img/lg-epc.png" style="margin-right: 40px; margin-left: 20px;" alt="">
    <img width="100px" src="<?php echo base_url('assets/') ?>img/bt-logo.png" style="margin-left: 40px;" alt="">
    <h3 class="page-header">Hasil Tes Gaya Belajar</h3>
</div>

        </div>
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
<br>
                        <table class="table">
                            <thead class="table-dark">
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
						<table class="table">
						<tr>
							<td>
							<canvas id="myChart" width="250" height="250"></canvas>
							<br>
							</td>
							<br>
						</tr>
						</table>
                    </div>
        </div>
        <div class="card-body">
            <div class="col-lg-12">
                <h3><b>Saran Untuk Metode Pembelajaran</b></h3>
				<div class="row">

				<div class="col-md-8">
				<div class="table-responsive">
					<table class="table">
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
        </div>
    </div>
</div>
</div>
</div>
</section>
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

   <script>
	window.addEventListener('beforeprint', function() {
    document.querySelectorAll('.no-print').forEach(function(element) {
        element.style.display = 'none';
    });
});

   </script>
      <?php endforeach;?>
<?php

$this->load->view('main/footer');
?>


<script>
         window.onload = function() {
             document.getElementById("download")
                 .addEventListener("click", () => {
                     const dt = this.document.getElementById("dt");
                     console.log(dt);
                     console.log(window);
                     var opt = {
                         margin: 1,
                         filename: 'gaya-belajar.pdf',
                         image: {
                             type: 'jpeg',
                             quality: 0.98
                         },
                         html2canvas: {
                             scale: 2
                         },
                         jsPDF: {
                             unit: 'in',
                             format: 'a4',
                             orientation: 'portrait'
                         }
                     };
                     html2pdf().from(dt).set(opt).save();
                 })
         }
     </script>
