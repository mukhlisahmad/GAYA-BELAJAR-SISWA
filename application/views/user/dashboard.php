<?php
$this->load->view('main2/header');
$this->load->view('main2/navbar');
?>
<section>
	<div class="card">
		<div class="card-header">
<center>
		</div>
		<?php $nama = $this->session->userdata('nama');?>
		<div class="card-body">
			<h1> Selamat datang  <?php echo $nama; ?> </h1>

		</div>
		<div class="card-body">
			<h3><b>Silahkan untuk memulai tes, pilih menu untuk memulai sesi tes </b></h3>
			<p>Semoga Sukses</p>
			<br>
			<img src="<?=base_url('assets/')?>img/kt.gif" alt="Logo Image" width="100%">
		</div>

	</div>
	</center>
</section>

    <?php
$this->load->view('main2/footer');
?>
