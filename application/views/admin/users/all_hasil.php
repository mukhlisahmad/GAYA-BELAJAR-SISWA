<?php
$this->load->view('main/header');
$this->load->view('main/navbar');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js"></script>

<section>
	<div class="card">
<div id="page-wrapper">

<button id="downloadCSV" class="btn btn-primary"><i class="fas fa-download"></i> Download Excel</button>

<div class="card-header">
        <div class="col-lg-12">
            <h1 class="page-header">Data Laporan Gaya Belajar Users</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<div id="dt">

    <!-- /.card -->
	<?php if (!empty($hasil_konsultasi)): ?>
    <div class="card-body">
        <div class="col-lg-12">
            <div class="panel panel-default">

                </div>
                <!-- /.panel-heading -->
				<br>
				<div class="table-responsive">
					<table class="table table-bordered table-hover" id="myTable">
					<thead class="table-dark">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Usia</th>
							<th>L/K</th>
							<th>Auditory</th>
							<th>Kinesthetic</th>
							<th>Visual</th>
							<th>Jumlah</th>
							<th>Gaya Belajar</th>
							<th>Tanggal Tes</th>
						</tr>
					</thead>
						<tbody>
							<?php $no = 1;foreach ($hasil_konsultasi as $hasil): ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $hasil['nama']; ?></td>
									<td><?php echo $hasil['usia']; ?></td>
									<td><?php echo $hasil['jk']; ?></td>
									<td><?php echo $hasil['persen_auditory']; ?>%</td>
									<td><?php echo $hasil['persen_kinesthetic']; ?>%</td>
									<td><?php echo $hasil['persen_visual']; ?>%</td>
									<td><?php echo $hasil['persen_auditory'] + $hasil['persen_kinesthetic'] + $hasil['persen_visual']; ?>%</td>
									<td><?php echo $hasil['gaya_belajar'] ?></td>
									<td><?php echo $hasil['created_at']; ?></td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
					<!-- /.table-responsive -->
					<?php else: ?>
        <p>Data kosong</p>
    <?php endif;?>
				</div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
</div>
</section>

</body>
<?php
$this->load->view('main/footer');
?>
</html>
<script>
    document.getElementById("downloadCSV").addEventListener("click", function() {
        var table = document.getElementById("myTable");
        var rows = table.querySelectorAll("tr");
        var csvContent = "";

        // Mendapatkan data dari setiap baris dan kolom tabel
        rows.forEach(function(row) {
            var cells = row.querySelectorAll("td, th");
            var rowData = Array.from(cells).map(function(cell) {
                return cell.textContent;
            });
            csvContent += rowData.join(",") + "\n";
        });

        // Membuat file CSV dengan data dari tabel
        var blob = new Blob([csvContent], {
            type: "text/csv;charset=utf-8"
        });
        saveAs(blob, "gaya-belajar.csv");
    });
</script>

