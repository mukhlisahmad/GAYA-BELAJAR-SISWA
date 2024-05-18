<?php
$this->load->view('main2/header');
$this->load->view('main2/navbar');
?>
<section>
<div class="card">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<div class="container">
    <div id="page-wrapper">
	<!-- <button class="btn btn-primary text-white" id="download"><i class="fas fa-download"></i> Download PDF</button> -->

		<div id="invoice">
        <div class="card-header">
            <div class="col-lg-12">
                <h1 class="page-header">Hasil Analisa Gaya Belajar</h1>
				<a class="btn btn-primary"href="<?php echo base_url('C_user/hasil_gb') ?>"> Lihat Hasil lengkap</a>
            </div>
        </div>
		<div class="card-body">
		<div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
						<td><?php echo $nama; ?></td>
                    	<td><?php echo $nik; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
		</div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <td><?php echo $persenA; ?>%</td>
                            <td><?php echo $persenK; ?>%</td>
                            <td><?php echo $persenV; ?>%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <div class="card-body">
            <div class="col-lg-12">
                <h3><b><u>Saran Untuk Metode Pembelajaran</u></b></h3>
                <ul>
				<?php foreach ($saran as $s): ?>
						<?php echo $s->keterangan; ?>
					<?php endforeach;?>
                </ul>
            </div>
        </div> -->
    </div>
</div>
</div>
</div>
</section>
<?php
$this->load->view('main2/footer');
?>
     <script>
         window.onload = function() {
             document.getElementById("download")
                 .addEventListener("click", () => {
                     const invoice = this.document.getElementById("invoice");
                     console.log(invoice);
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
                     html2pdf().from(invoice).set(opt).save();
                 })
         }
     </script>
