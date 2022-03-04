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

    
<form style="width: 500px; margin-left: 600px; margin-top: 10px;" method="POST" action="dangky.php">
	        <fieldset >
	    <legend>Đăng ký</legend>
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
	    			<td>RePassword</td>
	    			<td><input type="password" name="repassword" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng ký"></td>
                   
                    </tr>
                    
                
	    	</table>
  </fieldset>
  </form>


  <?php
    session_start();
    $arrayuser=array();
    
           
        if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
            
		$username = $_POST["username"];
		$password =$_POST["password"];
        $repass=$_POST["repassword"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		
		
        
        
       
        
		if ($username == "" || $password =="" || $repass =="") {
			echo "<script>alert('username hoặc password repassword bạn không được để trống!')</script>";  
		}
        elseif($password !== $repass ){
            echo "Vui lòng nhập lại password cho đúng!";

        }
        else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
               
				$arrayuser=[
                    
                    'users'=>$username,
                    'pass'=>$repass
                    
                    
                ];
                
                
            
        
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
               echo "<script>alert('đăng ký thành công  !')</script>"; 
               header('refresh:1; url= index.php');
        
            }
            $_SESSION['userr'][]=$arrayuser;
            
            
                 
                
                echo "<pre>";
                echo print_r($_SESSION["userr"]);  
                

            
        }
       
                ?>
    
		
</body>
</html>