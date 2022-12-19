<?php session_start();
?>
<form action="pesapal-iframe.php" method="post">
	<table>
		<tr>
			<td>Amount:</td>
			<td><input type="text" name="amount" Value="<?php echo $_GET['ammounts'] ?>" readonly="readonly" />
			(in UGX)
			</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="MERCHANT" readonly="readonly" />
			(leave as default - MERCHANT)
			</td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><input type="text" name="description"  placeholder="Order Description" required /></td>
		</tr>
		<tr>
			<td>Reference:</td>
			<td><input type="text" name="reference" value="<?php echo $_GET['refid'] ?>" readonly="readonly" />
			(the Order ID )
			</td>
		</tr>
		<tr>
			<td>Shopper's First Name:</td>
			<td><input type="text" name="first_name" value="<?php echo $_GET['firstname'] ?>" /></td>
		</tr>
		<tr>
			<td>Shopper's Last Name:</td>
			<td><input type="text" name="last_name" value="<?php echo $_GET['lastname'] ?> /></td>
		</tr>
		<tr>
			<td>Shopper's Email Address:</td>
			<td><input type="text" name="email" value="<?php echo $_GET['emails'] ?>" readonly="readonly"/></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Make Payment" /></td>
		</tr>
	</table>
</form>