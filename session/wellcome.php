<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	body{
		background-color:#333;
		min-height:100vh;
		border:2px solid #fff;
		color:red;
		text-align:center;
		display:flex;
		justify-content:center;
		flex-direction:column;

	}
	a{
		color: white;
		border-bottom:2px outset white;
		text-shadow:0 0 0 10px white;
		text-decoration:none;
	}
	a:hover{
		color:green;
	}
	p{
		color: green;
		text-shadow: 0px 0px 30px  green;
		text-transform:uppercase;
		word-spacing: 20px;
		width:auto;
		background-color: white;
		text-align:center;

		
	}
	h1{
		animation: move 1s linear infinite;
		
	}
	@keyframes move {
		0%{
			transform: translateY(0px);
		}
		10%{
			transform: translateY(-3px);
		}
		25%{
			transform: translateY(-5px)
		}
		50%{transform: translateY(0px);
		}
		75%{
			transform: translateY(5px);
		}
		100%{transform: translateY(10px);
		}
	}
</style>
<body>
	<?php
		if (session_id() === '')
		
		session_start();
	$name=$_SESSION['username'];
	$pw=$_SESSION['password'];

	print_r($name);
	print_r($pw);

	?>
	<h1>Well Come </h1>
	<p><?php echo $name?></p> 
	<div>
		<a href="logout.php">Đăng xuất !</a> 
	</div>
</body>
</html>