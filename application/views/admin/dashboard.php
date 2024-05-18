<?php
$this->load->view('main/header');
$this->load->view('main/navbar');
?>
<section>
	<div class="card">
		<div class="card-header">

		</div>
		<?php $nama = $this->session->userdata('nama');?>
		<div class="card-body">
			<h1> Selamanat datang  <?php echo $nama; ?> </h1>
		</div>
	</div>
</section>

    <?php
$this->load->view('main/footer');
?>
