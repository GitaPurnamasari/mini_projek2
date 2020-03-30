<h2>Daftar CRelawan</h2>
 
<table border='1' cellpadding='4'>
	<tr>
		<td><strong>id</strong></td>
		<td><strong>NIM</strong></td>
		<td><strong>Nama</strong></td>
		<td><strong>Alamat</strong></td>
		<td><strong>No Telp</strong></td>
		<td><strong>Kode Wilayah</strong></td>
	</tr>
	|
	<?php foreach ($Relawan as $CRelawan_item): ?>
		<tr>
			<td><?php echo $CRelawan_item['title']; ?></td>
			<td><?php echo $CRelawan_item['text']; ?></td>
			<td>
				<a href="<?php echo site_url('CRelawan/edit/'.$CRelawan_item['id']); ?>">Edit</a> |
				<a href="<?php echo site_url('CRelawan/delete/'.$CRelawan_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
