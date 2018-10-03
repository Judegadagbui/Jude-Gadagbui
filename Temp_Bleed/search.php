<?php
	include_once 'header2.php';


if (isset($_SESSION['hid'])) {
	echo '
		<section id="three" class="wrapper style4 special">
			<div class="container">
				<header class="major">
						<h2>Add Student</h2>
				</header>
			</div>
			<div class="container 50%">
				<form action="includes/add.php" method="POST">
					<div class="12u$">
						<input type="text" name="name" placeholder=" Full Name">
					</div><br>
					<div class="12u$">
						<input type="text" name="area" placeholder="City Name">
					</div><br>
					<div class="12u$">
						<input type="text" name="telephone" placeholder="Phone Number">
					</div><br>
					<div class="12u$">
						<input type="text" name="email" placeholder="Email">
					</div><br>
					<div class="12u$">
						<input type="text" name="btype" placeholder="Blood Type">
					</div><br>
					<div class="12u$">
						<ul class="actions">
							<li><input value="Add" class="special big" type="submit" name="submit"></li>
						</ul>
					</div>
				</form>
			</div>
		</section>;
		<section id="three" class="wrapper style3 special">
			<div class="container">
				<header class="major">
						<h2>Search Database</h2>
				</header>
			</div>
			<div class="container 50%">
				<form action="searching.php" method="POST">
					<div class="12u$">
						<input type="text" name="search" >
					</div><br>
					<div class="12u$">
						<ul class="actions">
							<button class="button special" >Search</button></ul>
					</div>
				</form>
			</div>
		</section>';
	}else {
		echo'
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
							<a href="login.php"><h2>PLEASE LOG IN TO ACCESS THIS PAGE</h2></a>
					</header>
				</div>
			</section>	';

		}




	include_once 'footer.php';


?>