<?php 
 

  $username= $_POST["name"];
  $sdt= $_POST["sdt"];
  $email_kh=$_POST["email"];
  $message=$_POST["message"];
  $to_email = 'lethanhtoan1122@gmail.com';
  $subject = 'Thư liên hệ ';
  $message1 = "$username ";
  $message1 .= "$email_kh "." \r\n";
  $message1 .= "$sdt";
  $message1 .= "$message";

  $headers = 'From: Lethanhtoan1122@gmail.com';
  

if ($username!='') {

        mail($to_email, $subject, $message1, $headers)   ;       
         echo 1; 
            
        exit();
  
}
    echo 0 ;
    exit();
?> 
