<html>
	<head>
		<title> Wiwied Widyasari_19108002 </title>
		<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<br>
			<h4> Data Dosen </h4>
			<br>

			<table class="table table-striped table-bordered">
				<tr align="center">
					<th> NID </th>
					<th> Nama Lengkap </th>
					<th> Alamat </th>
					<th> No. Handphone </th>
					<th> Email </th> 
				</tr>
				<?php foreach ($tb_dosen as $row) { ?>
					<tr>
						<td> <?php echo $row->NID ?> </td>
						<td> <?php echo $row->Nama ?> </td>
						<td> <?php echo $row->Alamat ?> </td>
						<td> <?php echo $row->No_HP ?> </td>
						<td> <?php echo $row->Email ?> </td>
					</tr>
				  <?php } ?>
			</table>
		</div>
	</body>
</html>