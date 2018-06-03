
	<div class="container">
		<h3><?php echo $judul ?></h3><br>
			<table class="table table-striped table-sm">
				<tr>
					<th>id</th>
					<th>jenis sampah</th>
					<th>judul</th>
					<th>pengelolaan</th>
					<th>aksi</th>
				</tr>
				<?php 
				foreach($user as $u){ 
					?>
					<tr>
						<td><?php echo $u->nim ?></td>
						<td><?php echo $u->nama ?></td>
						<td><?php echo $u->jenis_kegiatan ?></td>
						<td><?php echo $u->tempat_kp ?></td>
						<td><?php echo $u->alamat_tempat_kp ?></td>
						<td><?php echo $u->penyelia ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>