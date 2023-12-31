<?php 
 require_once __DIR__ . '/../../vendor/autoload.php';
 use app\controllers\AdminController;	
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Dark UI - Bank dashboard concept</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../public/Dachboard.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="app">
	<header class="app-header">
		<div class="app-header-logo">
			<div class="logo">
				<span class="logo-icon">
					<img src="https://assets.codepen.io/285131/almeria-logo.svg" />
				</span>
				<h1 class="logo-title">
					<span>Almeria</span>
					<span>bibliotheque</span>
				</h1>
			</div>
		</div>
		<div class="app-header-navigation">
			<div class="tabs">
				<a href="#">
					Overview
				</a>
				<a href="#" class="active">
					Payments
				</a>
				<a href="#">
					Cards
				</a>
				<a href="#">
					Account
				</a>
				<a href="#">
					System
				</a>
				<a href="#">
					Business
				</a>
			</div>
		</div>
		<div class="app-header-actions">
			<button class="user-profile">
				<span>Abdelquoddouss Fadli</span>
				<span>
					<img src="../public/img/tof youcode.jpg" />
				</span>
			</button>
			<div class="app-header-actions-buttons">
				<button class="icon-button large">
					<i class="ph-magnifying-glass"></i>
				</button>
				<button class="icon-button large">
					<i class="ph-bell"></i>
				</button>
			</div>
		</div>
		<div class="app-header-mobile">
			<button class="icon-button large">
				<i class="ph-list"></i>
			</button>
		</div>

	</header>
	<div class="app-body">
		<div class="app-body-navigation">
			<nav class="navigation">
				<a href="./Dachboard.php">
					<i class="ph-browsers"></i>
					<span>Dashboard</span>
				</a>
				<a href="./TableauAdmin.php">
					<i class="ph-check-square"></i>
					<span> Tables User</span>
				</a>
				<a href="./TableBook.php">
					<i class="ph-swap"></i>
					<span>table BOOK</span>
				</a>
				<a href="#">
					<i class="ph-file-text"></i>
					<span>Templates</span>
				</a>
				<a href="#">
					<i class="ph-globe"></i>
					<span>SWIFT</span>
				</a>
				<a href="#">
					<i class="ph-clipboard-text"></i>
					<span>Exchange</span>
				</a>
			</nav>
			<footer class="footer">
				<h1>Almeria<small>©</small></h1>
				<div>
					Almeria ©<br />
					All Rights Reserved 2021
				</div>
			</footer>
		</div>
      

        <table class="table">
  <thead>
    <tr>
      <th scope="col">full name</th>
      <th scope="col">last name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
       
    </tr>
  </thead>
  <tbody>
    <?php
		foreach($util as $utilisateur ):?>
		<tr>
      <th scope="row"><?php echo $utilisateur['fullname'];?></th>
	  <th scope="row"><?php echo $utilisateur['lastname']; ?></th>     
	  <th scope="row"><?php echo $utilisateur['email']; ?></th>
	  <th scope="row"><?php echo $utilisateur['phone']; ?></th>
        
    </tr>
		<?php endforeach;?>
  </tbody>
</table>
	</div>
    </div>

<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src='https://unpkg.com/phosphor-icons'></script><script  src="./script.js"></script>

</body>
</html>
