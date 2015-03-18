<?php
require_once('class/Class_PDO.php');
require_once("class/class_fn.php");
if(isset($_GET["logout"])){
	unset($_SESSION["login_id"]);
	fn::go_url("?");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta name="description" content="PhoneBook">
		<meta name="keyword" content="PhoneBook">
		<meta name="author" content="PhoneBook">
		<title>PhoneBook</title>
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="lib/style.css">
		<script src="lib/jquery-1.11.1.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/bootstrap-validator-master/dist/validator.min.js"></script>

		<!-- datatables-->
		<link rel="stylesheet" href="lib/datatables/bootstrap-table.min.css">
		<script src="lib/datatables/bootstrap-table.min.js"></script>
		<!-- cus-->
		<script src="lib/phonebook_fuc.js"></script>
		<script src="lib/phonebook_dom.js"></script>
	</head>
	<body>
		<?php 
		if(isset($_SESSION["login_id"])){
		include("nav.php");
		?>
		<div class="container content">
			<div class="row">
				<div class="col-md-12">
				<?php include("module/book/add.php");
				if(isset($_GET["url"])){
					$ex = explode("_",$_GET['url']);
					$path = $ex[0];
					$file = $ex[1].".php";
					include("module/$path/$file");
				}
				?>
			</div>
		</div>
		<?php
		}else{
		include("login.php");
		}
		?>
	</body>
</html>
<?php require_once("class/post.php"); exit;?>