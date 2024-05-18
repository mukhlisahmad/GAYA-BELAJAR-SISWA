<?php
$this->load->view('main/header');
$this->load->view('main/navbar');
?>
<section>
	<div class="card">
<div id="page-wrapper">
    <div class="card-header">
        <div class="col-lg-12">
            <h1 class="page-header">Data Users</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.card -->
    <div class="card-body">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#" class="btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><span class="fa fa-plus"></span>
					<i class=" fa-solid fa-person-circle-plus"></i>
				</a>
				<a href="<?php echo base_url('user/detail_all'); ?>" class="btn btn-primary btn-lg" >
					GB_<i class="fa-solid fa-users-rectangle"></i>
				</a>
                </div>
                <!-- /.panel-heading -->
				<br>
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myTable">
						<thead class="table-dark">
							<tr>
								<th>No</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Level</th>
								<th>GB</th>

								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
$no = 1;
foreach ($akun as $user):
?>
									<tr>
										<td>
											<?php echo $no++; ?>
										</td>
										<td><?php echo $user['nik']; ?></td>
										<td><?php echo $user['nama']; ?></td>
										<td>
										<?php
if ($user['level'] == 1) {
    echo "Admin";
} elseif ($user['level'] == 2) {
    echo "User";
} else {
    echo "error";
}
?>
									</td>

									<td>
									<a href="<?=site_url('User/detail_gb/' . $user['nik']);?>" class="btn btn-info "><i class="fa-solid fa-users-viewfinder"></i></a>
									</td>
									<td>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal_<?php echo $user['nik']; ?>">
											<i class="fa-solid fa-file-pen"></i>
										</button>
									<button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#hapusModal_<?php echo $user['nik']; ?>">
									<i class="fa-solid fa-trash-can"></i>
								</button>
									</td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
					<!-- /.table-responsive -->
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

<!-- Modal Edit -->
<?php foreach ($akun as $user): ?>
    <div class="modal fade" id="editModal_<?php echo $user['nik']; ?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Data Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formEdit" action="<?php echo base_url('user/update_pengguna'); ?>" method="post">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="edit_nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="edit_nama" name="nama" value="<?php echo $user['nama']; ?>">
                        </div>
						<div class="mb-3">
                            <label for="edit_usia" class="form-label">Usia</label>
                            <input type="text" class="form-control" id="edit_usia" name="usia" value="<?php echo $user['usia']; ?>">
                        </div>
						<div class="mb-3">
                            <label for="edit_instansi" class="form-label">instansi</label>
                            <input type="text" class="form-control" id="edit_instansi" name="instansi" value="<?php echo $user['instansi']; ?>">
                        </div>
						<div class="mb-3">
                            <label for="edit_jk" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="edit_jk" name="jk" value="<?php echo $user['jk']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="edit_password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="edit_password" name="password" value="<?php echo $user['password']; ?>">
                        </div>
						<div class="mb-3">
							<label for="edit_level" class="form-label">Level</label>
							<p>
								<?php
if ($user['level'] == 1) {
    echo "Admin";
} elseif ($user['level'] == 2) {
    echo "User";
} else {
    echo "error";
}
?>
							</p>

							<select class="form-select" id="edit_level" name="level">
								<option value="1" <?php if ($user['level'] == 'Admin') {
    echo 'selected';
}
?> >Admin</option>
								<option value="2" <?php if ($user['level'] == 'User') {
    echo 'selected';
}
?> >User</option>
							</select>
						</div>

                        <input type="hidden" id="edit_nik" name="nik" value="<?php echo $user['nik']; ?>">
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
<!-- /#wrapper -->
<!-- MODAL ADD -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Data Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formTambah" action="<?php echo base_url('user/tambah_pengguna'); ?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tambah_nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="tambah_nik" name="nik" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambah_nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="tambah_nama" name="nama" required>
                    </div>
					<div class="mb-3">
                        <label for="tambah_usia" class="form-label">Usia</label>
                        <input type="text" class="form-control" id="tambah_usia" name="usia" required>
                    </div>
					<div class="mb-3">
                        <label for="tambah_instansi" class="form-label">Instansi</label>
                        <input type="text" class="form-control" id="tambah_instansi" name="instansi" required>
                    </div>
					<div class="mb-3">
                        <label for="tambah_jk" class="form-label">Jenis Kelamins</label>
                        <input type="text" class="form-control" id="tambah_jk" name="jk" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambah_password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="tambah_password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambah_level" class="form-label">Level</label>
						<select class="form-select" id="edit_level" name="level">
								<option value="1" >Admin</option>
								<option value="2" >User</option>

						</select>
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


<!-- Modal Hapus -->
<?php foreach ($akun as $user): ?>
<div class="modal fade" id="hapusModal_<?php echo $user['nik']; ?>" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapusLabel">Hapus Data Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formHapus" action="<?php echo base_url('user/hapus_pengguna'); ?>" method="post">
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus data pengguna ini?</p>
                    <input type="hidden" id="hapus_nik" name="nik" value="<?php echo $user['nik']; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>
</div>
</section>

</body>
<?php
$this->load->view('main/footer');
?>
</html>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
