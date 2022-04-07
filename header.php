<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style22.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upgrade PC</title>
</head>
<body>
<?php
session_start();
include('errors.php');
include('db.php');
?>
<div class="navbar_container">
		<nav class="navbar">
		<a href="index.php" id="Logo">LA VALI</a>
			
			<ul class="navbar_menu">
		
				<div class="navbar_items">
			<li><a href="index.php" class="navbar_links" id="home_page"> HOME </a> </li>
			<li><a href='upgrade.php' class='navbar_links' id='upgrade_page' > UPGRADE </a> </li>
		
				
			
			
			
			<?php



				if(!isset($_SESSION['auth']))
				{
				echo	"<li><a href='shop.php' class='navbar_links' id='shop_page'> STOCK </a> </li>";
				}
				else
				{
					echo	"<li><a href='shop2.php' class='navbar_links' id='shop_page2'> STOCK </a> </li>";
				}
						?>
							<li><a href='mail.php' class='navbar_links' id='mail_page' > CONTACT </a> </li>
							<?php
				if(!isset($_SESSION['auth']))
				{
				echo	"<li><a href='login.php' class='navbar_links' id='login_page'> LOGIN </a> </li>";
				}
				else
				{
					echo	"<li><a href='logout.php' class='navbar_links' id='logout_page'> LOGOUT </a> </li>";
				}
			?>
			
			</div>
		</ul>
		</nav>
		</div>
		
				<hr>



