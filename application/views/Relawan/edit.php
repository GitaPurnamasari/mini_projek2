<h2>Edit</h2>

<?php echo validation_errors(); ?>
<?php echo form_open('Relawan/edit/'.$Relawan_item['idRelawan']); ?>

	<table>
		<tr>
			<td><label for="Nim">Nim</label></td>
			<td><input type="input" name="Nim" size="50" value="<?php echo $Relawan_item['Nim'] ?>"/></td>
		</tr>

		<tr>
			<td><label for="Nama">Nama</label></td>
			<td><textarea name="Nama" rows="10" cols="40"><?php echo $Relawan_item['Nama']?></textarea></td>
		</tr>
		
		<tr>
			<td><label for="Alamat">Alamat</label></td>
			<td><textarea name="Alamat" rows="10" cols="40"><?php echo $Relawan_item['Alamat']?></textarea></td>
		</tr>

		<tr>
			<td><label for="NoTelp">NoTelp</label></td>
			<td><textarea name="NoTelp" rows="10" cols="40"><?php echo $Relawan_item['NoTelp']?></textarea></td>
		</tr>

		<tr>
			<td><label for="KodeWilayah">KodeWilayah</label></td>
			<td><textarea name="KodeWilayah" rows="10" cols="40"><?php echo $Relawan_item['KodeWilayah']?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Edit news item" /></td>
		</tr>
	</table>
</form>