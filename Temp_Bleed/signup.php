<?php
	include_once 'header2.php';
?>
<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Sign Up</h2>
					</header>
				</div>
				<div class="container 50%">
					<form action="includes/sign.php" method="POST">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" placeholder="School Name" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input type="text" name="address" placeholder="Address">
							</div>
							<div class="12u$">
								<input type="text" name="telephone" placeholder="Telephone">
							</div>
							<div class="12u$">
								<input type="text" name="email" placeholder="E-mail">
							</div>
							<div class="12u$">
								<input type="text" name="hid" placeholder="Username">
							</div>
							<div class="12u$">
								<input type="password" name="pwd" placeholder="Password">
							</div>
							<div class="12u$">
								<ul class="actions">
								<li><input value="Sign Up" class="special big" type="submit" name="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>



<?php
	include_once 'footer.php';
?>
