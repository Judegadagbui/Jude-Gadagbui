<?php
	include_once 'header2.php';
?>
<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Log In</h2>
					</header>
				</div>
				<div class="container 50%">
					<form action="includes/login.php" method="POST">
							<div class="12u$">
								<input type="text" name="hid" placeholder="Username">
							</div><br>
							<div class="12u$">
								<input type="password" name="pwd" placeholder="Password">
							</div><br>
							<div class="12u$">
								<ul class="actions">
								<li><input value="Login" class="special big" type="submit" name="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>



<?php
	include_once 'footer.php';
?>
