<?php 
	include_once 'classes/sellers.php';

	$_seller = new Seller();

	if ($_POST) {
		$_seller->post($_POST);	
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Add Seller</title>
 </head>
 <body>
 
 	<form action="add_seller.php" method="post">
		Name: <input type="text" name="name"><br>
		Contact Number: <input type="text" name="contact_number"><br>
		City: <input type="text" name="address_city"><br>
		Country: <input type="text" name="address_country"><br>
		<input type="submit" value="submit">	
 	</form>
 </body>
 </html>



