<?php
$this->load->view('main2/header');
$this->load->view('main2/navbar');
?>
<section>
<style>
         .form-check-input {
            vertical-align: middle;
            margin-top: 0;
        }
        .form {
            display: inline-block;
            margin: 0;
            padding-left: 10px; /* Adjust as needed */
            vertical-align: middle;
        }
        .form-group {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
		@media (max-width: 600px) {
            .form-group {
                flex-direction: column;
                align-items: flex-start;
            }
            .form {
                padding-left: 0;
                margin-top: 5px; /* Adjust as needed */
            }
        }
    </style>

<div class="card">
<div class="container">
        <div id="page-wrapper">
            <div class="card-header">
                <div class="col-lg-12">
                    <h1 class="page-header">Jawablah Semua Pertanyaan Dibawah ini</h1>
					<p class="page-header"> Pilih yang menggambarkan dirimu</p>
				<?=$this->session->flashdata('message_konsul');?>
                </div>
            </div>
            <div class="card-body">
			<form method="POST" action="<?=base_url('C_user/hasilKonsul');?>" >
			<?php for ($i = 1; $i <= 30; $i++): ?>
				<hr>
			<div class="question">
				<?php foreach (${"gb$i"} as ${"g$i"}): ?>
					<h5><b><?php echo ${"g$i"}['soal']; ?></b></h5>
				<?php endforeach;?>

				<?php foreach (${"soal$i"} as ${"s$i"}): ?>
					<input type="hidden" name="nosoal<?php echo $i; ?>" value="<?php echo ${"s$i"}->nosoal; ?>">
					<div class="form-group">
        <input type="radio" required class="form-check-input" name="s<?php echo $i; ?>" value="<?php echo ${"s$i"}->nilai; ?>">
        <p style="color:#000;" class="form"><?php echo ${"s$i"}->pertanyaan; ?></p><br>
    </div>
				<?php endforeach;?>
			</div>
			<?php endfor;?>
				<div class="question">
					<br>
					<button type="submit" class="btn btn-primary" value="Lihat Hasil"name="lihat">Lihat Hasil</button>
					<br><br>
				</div>

                </form>
            </div>
		</div>
    </div>
</div>
</section>
    <?php
$this->load->view('main2/footer');
?>
