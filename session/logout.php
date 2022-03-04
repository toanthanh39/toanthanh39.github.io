<?php
  
    session_start();
    $name=$_SESSION['username'];
    $userr=isset($_SESSION["userr"])? $_SESSION["userr"]:array(null,null);
    // $_SESSION["userr"]=array_diff($_SESSION["userr"],$name);
    // $this->Session->delete('userr.'$name);
   foreach($userr as $key => $value)
    if($name==$value["users"]){
       unset($_SESSION["userr"][$key]);
       echo " dang xuat thanh cong";
   };
    // session_destroy();
    header('refresh:3; url= index.php');

?>