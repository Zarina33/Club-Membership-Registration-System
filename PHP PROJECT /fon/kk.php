<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personal Page</title>

	<script src="fon/gsap.min.js" defer></script>
	<script src="fon/ScrollTrigger.min.js" defer></script>
	<script src="fon/ScrollSmoother.min.js" defer></script>
	<script src="fon/app.js" defer></script>
	<link rel="stylesheet" href="main.css">
</head>

<body>

	<div class="hero">
		<nav>
			<img src="images/logo.png" class="logo">
			<img src="images/user.png" class="user-pic" onclick="toggleMenu()">

			<div class="sub-menu-wrap" id="subMenu">
				<div class="sub-menu">
					<div class="user-info">
						<table>
						<td><img src="images/user.png"><td>
						<?php
							$mysql = new mysqli('localhost', 'root', 'root', 'register');
							$result=$mysql->query("SELECT * FROM `users` WHERE `id`>0");
							while ($row = mysqli_fetch_array($result)) {
								echo "<table>";
								echo "<tr>";
									echo "<td>" . $row["name"] . "</td>";
									echo "<td>" . $row["position"] . "</td>";
								echo "</tr>";
								echo "</table>";
						}
						?>
						</table>
					</div>
					<hr>
					<div class ="buttons">
					<a href="#" class="sub-menu-link">
						<img src="images/todolist.png">
						<p>To do list</p>
						<span><a href="to_do.php"></span>
					</a>
					
					<a href="#" class="sub-menu-link">
						<img src="images/setting.png">
						<p>Articles</p>
						<span><a href="articles.php"></span>
					</a>
					</a>
					<a href="#" class="sub-menu-link">
						<img src="images/logout.png">
						<p>Log out</p>
						<span><a href="Main.php"></span>
					</a>
				 </div> 
			</div>
		</nav>
	</div>

	
	<div class="wrapper">
		<div class="content">

			<header class="main-header">
				<div class="layers">
					<div class="layer__header">
						<div class="layers__caption">Welcome to the club</div>
						<div class="layers__title"><b>artificial intelligence</b></div>
					</div>
					<div class="layer layers__base" style="background-image: url(images/layer-base.jpg);"></div>
					<div class="layer layers__middle" style="background-image: url(images/layer-middle.png);"></div>
					<div class="layer layers__front" style="background-image: url(images/layer-front.png);"></div>
				</div>
			</header>
		<article class="main-article" style="background: white">
				
				
			</article>

		</div>

	</div>
	<script>
		let subMenu = document.getElementById("subMenu");
		function toggleMenu() {
			subMenu.classList.toggle("open-menu");
		}
	</script>
</body>

</html>