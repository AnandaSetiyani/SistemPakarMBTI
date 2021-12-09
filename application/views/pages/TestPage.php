<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		echo $style;
		echo $script;
		echo $navbar;
	?>
</head>
<body class="home">
	<div class="container">
		<div class="title">
			<h3 class="mb-2">
				Jawablah Pernyataan Untuk Mengetahui Tipe Kepribadian !
			</h3>
			<h4 class="mb-2 question" style="background-color: #68dada; color: whitesmoke; text-align: center;">
				Jawablah pernyataan berikut sesuai dengan keadaan Anda akhir-akhir ini.
			</h4>
		</div>
		<div class="container col-md-12 text-center mb-4">
			<div className="custom-scrollbar-css p-2">
				<form action="<?= site_url('Result') ?>" method="POST">
				<?php
					$i = 1;
					foreach($test as $row) {
						$soal = $row['Pernyataan'];
				?>
				<div class="row mt-3 question">
					<div class="col">
						<div className="row" style="font-size: 20px; font-weight: bold;">
							<?= $soal; ?>
						</div>
						<div className="row">
							<div className="form-check inline-block">
								<label> Tidak Pasti </label>
									<input type="radio" name="<?= $i; ?>" value="0" required/>
									<input type="radio" name="<?= $i; ?>" value="0.2" required/>
									<input type="radio" name="<?= $i; ?>" value="0.4" required/>
									<input type="radio" name="<?= $i; ?>" value="0.6" required/>
									<input type="radio" name="<?= $i; ?>" value="0.8" required/>
									<input type="radio" name="<?= $i; ?>" value="1" required/>
								<label> Pasti </label>
							</div>
						</div>
					</div>
				</div>
				<?php
						$i++;
					}
				?>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-md-4 text-center">
					<input type="submit" class="btn btn-lg btn-warning" name="submitTest" value="Submit">
				</div>
			</div>
				</form>
		</div>
	</div>
</body>
</html>

