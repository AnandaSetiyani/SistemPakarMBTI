<head>
	<?php
		echo $style;
		echo $script;
	?>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<a href="<?php echo site_url('Home'); ?>" class="logo">
		<img src="<?php echo base_url().'assets/HomeLogo.png' ?>">
	</a>
	<ul class="nav align-right">
		<li class="nav-item">
			<div class="topNav">
				<a class="nav-link" href="<?php echo site_url('Test'); ?>">Tes</a>
			</div>
		</li>
		<li class="nav-item">
			<div class="topNav">
				<a class="nav-link" href="<?php echo site_url('TipePersonalitas'); ?>">Tipe Kepribadian</a>
			</div>
		</li>
		<li class="nav-item">
			<div class="topNav">
				<a class="nav-link" href="<?php echo site_url('AboutUs'); ?>">Tentang Kami</a>
			</div>
		</li>
		<li class="nav-item">
			<div class="topNav">
				<a class="nav-link" href="<?php echo site_url('Credits'); ?>">Credits</a>
			</div>
		</li>
	</ul>
</nav>
