<?php 

$user = query("SELECT username, password, nama FROM user");
?>
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->	
		<div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title">Home</h3>
				<h4 class="panel-subtitle">Date : <?php echo date('l, d F Y');?></h4>
			</div>
			<div class="panel-body">
				<h1>Selamat Datang, Waiter</h1>
				<br>
				<h4 class="panel-subtitle">Nama Waiter : <?=$user[3]["nama"]?></h4>
			</div>
		</div>
	</div>
	<!-- END OVERVIEW -->
</div>
<!-- END MAIN CONTENT -->
