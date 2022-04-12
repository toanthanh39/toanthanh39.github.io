<?php



$ma=$_POST["id"];
  $to_email = $_POST["email"];
  $subject = 'Vé của bạn';
  $message1 = "Đây là mã vé của bạn: \r\n";
  $message1 .= "https://chart.googleapis.com/chart?chs=180x180&cht=qr&chl='.$ma.'&choe=UTF-8/>";
  $headers = "From: Lethanhtoan1122@gmail.com";
  $headers .=" Content-type: text/html; charset=utf-8 \r\n";
  

if ($ma!='') {

        mail($to_email, $subject, $message1, $headers)   ;       
         echo 1; 
            
        exit();
  
}
    echo 0 ;
    exit();
?>