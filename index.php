<?php
include("database.php");
$db = new database();
?>

<form action="api.php" method="POST"> 
	<input type="number" name="dana" placeholder="Jumlah dana">
	<input type="number" name="norek" placeholder="No. Rekeneing">
	<input type="text" name="ket" placeholder="Keterangan">
	<select name="namrek">
		  <option value="mandiri syariah">Mandiri Syariah</option>
		  <option value="bri syariah">Bri Syariah</option>
		  <option value="muamalat">Muamalat</option>
	</select>
	<button type="submit" name="cair">Cairkan</button>
</form>


<table border="1">
		<tr>
			<th>No</th>
			<th>Transaction ID</th>
			<th>Amount</th>
			<th>Status</th>
			<th>Timestamp</th>
			<th>Bank Code</th>
			<th>Account Number</th>
			<th>Beneficiary</th>
			<th>Remark</th>
			<th>Receipt</th>
			<th>Time Served</th>
			<th>Fee</th>
			<th>Action</th>
		</tr>

	<!-- Menambahkan atribut tabel beserta nilai yang di retrieve dari DB -->
		<?php
			$no = 1;
			foreach($db->get_data() as $b){
		?>
			<tr>
				<td><?php echo $no++  ?></td>
				<td><?php echo $b['id']  ?> <input type="hidden" name="id_transaction"></td>
				<td><?php echo $b['amount']  ?></td>
				<td><?php echo $b['status']  ?></td>
				<td><?php echo $b['timestamp']  ?></td>
				<td><?php echo $b['bank_code']  ?></td>
				<td><?php echo $b['account_number']  ?></td>
				<td><?php echo $b['beneficiary_name']  ?></td>
				<td><?php echo $b['remark']  ?></td>
				<td><?php echo $b['receipt']  ?></td>
				<td><?php echo $b['time_served']  ?></td>
				<td><?php echo $b['fee']  ?></td>
				<form action="api.php" method="GET">
					<td><button name="<?php echo $b['id'] ?>">Check</button></td>
				</form>
			</tr>
		<?php
			}
		?>
	</table>