<?php
  // require( '../../../wp-load.php' );
  $datave= (isset($_SESSION["ve"]))? $_SESSION["ve"]:[];
  if(isset($_SESSION['ve'])){
   global  $wpdb;
  
   $table  = $wpdb->prefix . 'ticket'; // Bảng cần lấy
   $sql    = "SELECT * FROM {$table}  WHERE name = %s "; //câu sql query
   $data   = $wpdb->get_results( $wpdb->prepare($sql,$datave['name']), ARRAY_A); 
  $con=   get_template_directory_uri() ;
  $stt=1;
    if($data){
      echo "<div class='pagination featured-pre ticket-pre'>";     
          
            echo"<button  id='pre-page'>";
              echo"pre";
            echo "</button>";
          
      echo "</div>";
      
      echo"<div class='sticket-detail' id='ve'>";
          echo"<div class='overflow-ticket' id='off'>";
          foreach($data as $key => $value){
          }
             for($i=1;$i<=$value['quantity'];$i++) {
            echo "<div class='sticket-feature' >";
              // echo $i;echo "<br>";
              echo "<div class='qrcode'>";
                echo "<img id='qr' src='https://chart.googleapis.com/chart?chs=180x180&cht=qr&chl=".$value['id']."\n ".$value['name']."\n".$value['price']."&choe=UTF-8' />";
              echo "</div>";

              echo "<h2>";
                echo "ALT".$value['id'];
              echo"</h2>";

              echo "<h4>";
                echo "Vé cổng";
                
              echo"</h4>";
              echo "<p>";
                echo "...";
              echo"</p>";
                
              echo "<p>";
                echo"Ngày sử dụng: ".$value['date'] ;
              echo"</p>";

              echo"<div  class='success-item1'>";
              echo"<img src={$con}/icon/tick.png alt='tick'>";
              
              echo "</div>";
             
             
              echo"</div>";       
          }
          
          echo "</div>";
      echo"</div>";
      
        
          
      echo "<div class='pagination featured-next ticket-next'>";
       
          echo"<button id='next-page'>";
            echo"next";
          echo "</button>";
       
      echo "</div>";
      echo"<div class='total_ticket'";
          
          echo "<p>";
            echo"Số vé : " .$value['quantity'];  
          echo "</p>";

          echo "<div class='down-ticket'>";
          echo"<a href='#ve' download='Event-ticket' >";
            echo"<button id='download'>";
                echo"Tải về";
            echo "</button>";
          echo"</a>";
            echo"<button id='sendmail'>";
              echo"Gửi mail";
            echo "</button>";
          echo"</div>";

          echo "<div class='current-page'>";
            $perpage=1;
            $total_page=ceil($value['quantity']/4);
            echo "<p>";
              echo "Page:";
            echo"</p>";
            echo "<p id='current'>";
              echo "$perpage";
           echo" </p>";
           echo "<p>";
              echo "/$total_page";
           echo" </p>";
          echo"</div>";
      echo "</div>";
      
    }
    else{
      echo  " No result data ";
    }
  // count total 
  }else{
    echo "No result.";
  }
  
//  QR CODE 
// require_once "vendor/autoload.php";

// use Endroid\QrCode\ErrorCorrectionLevel;
// use Endroid\QrCode\LabelAlignment;
// use Endroid\QrCode\QrCode;
// use Endroid\QrCode\Response\QrCodeResponse;

// //Khởi tạo đối tượng QR Code, tham số truyền vào là nội dung cần tạo mã
// //Nội dung này có thể là dạng link http:// hay https://
// //Nội dung có thể là tel: ,sms: hoặc là đoạn text bất kì
// $qrCode = new QrCode('Code Tu Tam - Demo QR Code');
// //Kích cỡ của mã Qrcode tạo ra, như dưới dây là 300x300
// $qrCode->setSize(300);
// //Set ảnh ra là PNG
// $qrCode->setWriterByName('jpg');
// //Set mã encoding qrcode là UTF-8
// $qrCode->setEncoding('UTF-8');
// $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH());
// //Set màu chữ, màu nét vẽ là màu đen
// $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
// //Set màu nền là màu trắng
// $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
// //Set Label hiển thị dưỡi QR COde các tham số bao gồm: Chữ hiển thị,  cỡ chữ, font chữ, Vị trí chữ (Trái-Left, phải-right, giữa-center)
// $qrCode->setLabel('Scan the code', 16, null, LabelAlignment::CENTER());
// // Set đường dẫn logo để ghi đè lên QR Code, nếu không set thì bỏ qua lệnh này
// // $qrCode->setLogoPath(__DIR__.'/logo1.png');
// // Set Kích thước của Logo
// $qrCode->setLogoSize(50,50);
// $qrCode->setValidateResult(false);

// //Set Round Blocksie và margin để tạo khoảng trắng xung quanh , giúp mã QR dễ đọc hơn
// $qrCode->setRoundBlockSize(true);
// $qrCode->setMargin(10); 

// //Ghi ra file tương ứng
// $qrCode->writeFile(__DIR__.'/qrcode.png');

?>