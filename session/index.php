<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body{
        min-height:100vh;
        border:1px solid white;
        background-color:#DBCFCD;
        color: white;
        font-family: 'Open Sans', sans-serif;
    }
    form{
        background-color:#333;
        box-shadow: 0 0 10px 10px #fff;
        
    }
    table{
       
    }
    table tr td{
        padding:10px
        margin: 4px;
        text-align:center;
    }
    a{
        padding:10px;
        width:100px;
        height:50px;
        border:2px solid yellow;
		color: white;
		background-color:rgb(255,0,0,.6);
		text-shadow:0 0 0 10px white;
		text-decoration:none;
        text-align:center;
	}

</style>
<body>

<form style="width: 500px; margin-left: 500px; margin-top: 10px;" method="POST" action="index.php">
	        <fieldset >
	    <legend>Đăng nhập</legend>
	    	<table style="margin-left:60px; text-align: center">
                
                
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
                    </tr>
                    <tr>
                     <td colspan="2"><p>Bạn chưa có tài khoản?</p></td>
                        
	    		</tr>
                <tr>
                     
                       <td colspan="2"><a href="dangky.php"> đăng ký</a></td>
                    
	    		</tr>
	    	</table>
  </fieldset>
  </form>


  <?php
  // Lưu biến session toàn cục để sử dung trong trang index.php.
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    session_start();
    $userr=isset($_SESSION["userr"])? $_SESSION["userr"]:array(null,null);
    $store=array();
   
    echo "<pre>";
    print_r($_SESSION["userr"]);
    print_r($store);
        if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password =$_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
        array_push($store,$username,$password);
        foreach($userr as $key=> $user)
        
		if ($username == "" || $password =="") {
			
            echo "<script>alert('username hoặc password repassword bạn không được để trống!')</script>"; 


		} else if($username==$user["users"] || $password==$user["pass"]){
        //    tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
           $_SESSION['username'] = $username;
           $_SESSION['password']=$password;
         
           // Thực thi hành động sau khi lưu thông tin vào session
           // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
          echo "<script>alert('đăng nhập thành công  !')</script>"; 
         echo  header('refresh:1; url= wellcome.php');
       
        
         }else{

            echo"<script>alert('tên đăng nhập hoặc mật khẩu không đúng !')</script>";
            header('refresh:1; url= index.php');  
              
        }
                
			
                }?>
    
		
</body>
</html>