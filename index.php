<?php 

	include_once 'classes/sellers.php';

	$_seller = new Seller();

	$sellers = $_seller->all();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Contact Number</th>
			<th>City</th>
			<th>Country</th>
		</tr>

		<?php 
			foreach ($sellers as $seller) {
				echo '<tr>';

				echo '<td>'. $seller->name . '</td>';
				echo '<td>'. $seller->contact_number . '</td>';
				echo '<td>'. $seller->address_city . '</td>';
				echo '<td>'. $seller->address_country . '</td>';

				echo '</tr>';
			}
		 ?>


		
	</table>

	<a href="/add_seller.php">Add Seller</a>
</body>
</html>