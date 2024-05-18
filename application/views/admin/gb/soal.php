<?php
$this->load->view('main/header');
$this->load->view('main/navbar');
?>

<section>
	<div class="card">
	<div id="page-wrapper">
		<div class="container">
			<div class="card-header">
			<h1> Data Soal Gaya Belajar </h1>
			</div>
			<div class="card-body">

<div class="panel-heading">
<!-- <a href="#" class="btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><span class="fa fa-plus"></span>
					<i class=" fa-solid fa-person-circle-plus"></i>
				</a> -->
</div>
<div class="table-responsive">
	<table class="table table-bordered" id="myTable">
		<thead class="table-dark">
			<tr>
				<td>No Soal</td>
				<td>Kode</td>
				<td>Soal</td>
				<td>Action</td>
			</tr>

		</thead>
		<tbody>
			<?php foreach ($gb as $g):

?>
			<tr>
				<td>
					<?php echo $g['id'] ?>
				</td>
				<td>
					<?php echo $g['kode'] ?>
				</td>
				<td>
					<?php echo $g['soal'] ?>
				</td>
				<td>
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal_<?php echo $g['id']; ?>">
											<i class="fa-solid fa-file-pen"></i>
										</button>
				<!-- <button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#hapusModal_<?php echo $g['id']; ?>">
									<i class="fa-solid fa-trash-can"></i>
								</button> -->

				</td>

			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
<!-- MODAL ADD -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Data soal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formTambah" action="<?php echo base_url('gb/C_soalgb/tambah_soal'); ?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tambah_id" class="form-label">No Soal</label>
                        <input type="text" class="form-control" id="tambah_id" name="id" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambah_kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="tambah_kode" name="kode" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambah_soal" class="form-label">Soal</label>
                        <input type="soal" class="form-control" id="tambah_soal" name="soal" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--END MODAL ADD-->
<!-- Modal Edit -->
<?php foreach ($gb as $g): ?>
    <div class="modal fade" id="editModal_<?php echo $g['id']; ?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Data Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formEdit" action="<?php echo base_url('gb/C_soalgb/update_soal'); ?>" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_id" class="form-label">No Soal</label>
                            <input type="text" class="form-control" id="edit_id" name="id" value="<?php echo $g['id']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="edit_kode" class="form-label">Kode</label>
                            <input type="text" class="form-control" id="edit_kode" name="kode" value="<?php echo $g['kode']; ?>">
                        </div>

						<div class="mb-3">
                            <label for="edit_soal" class="form-label">Soal</label>
                            <input type="text" class="form-control" id="edit_soal" name="soal" value="<?php echo $g['soal']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach;?>
			</div>
		</div>
	</div>
	</div>
</section>

<?php
$this->load->view('main/footer');
?>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
