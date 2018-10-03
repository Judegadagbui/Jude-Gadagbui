<?php
	include_once '../header2.php'
?>

<section id="three" class="wrapper style3 special">
				<div class="container"> 
<table >
	<tr>
		<th> Patient Name</th>
		<th> Location</th>
		<th> Blood Type</th>
<?php

$conn = mysqli_connect("localhost","root","","bleed");
$set=$_POST['search'];

if($set) {
	$show= "SELECT * FROM students where p_btype='$set'";
	$result=mysqli_query($conn,$show);
	
}
while ($row =mysqli_fetch_array($result)) {

			echo "<tr>";
			echo "<td>";
			echo $row['p_name'];
			echo "</td>";
			echo "<td>";
			echo $row['p_address'];
			echo "</td>";
			echo "<td>";
			echo $row['p_btype'];
			echo "</td>";
			echo "<td>";
			echo $row['p_phone'];
			echo "</td>";
			echo "<tr>";
			echo"<br>";
}



?>
</table>
</div>
</section>
<?php
include_once '../footer.php'; 
?>