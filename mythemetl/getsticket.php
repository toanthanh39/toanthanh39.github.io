<?php
  // require( '../../../wp-load.php' );
  $datave= (isset($_SESSION["ve"]))? $_SESSION["ve"]:[];
  if(isset($_SESSION['ve'])){
   global  $wpdb;
   $ten="TUUU";
   $table  = $wpdb->prefix . 'ticket'; // Bảng cần lấy
   $sql    = "SELECT * FROM {$table}  WHERE name = %s "; //câu sql query
   $data   = $wpdb->get_results( $wpdb->prepare($sql,$datave['name']), ARRAY_A); 
  $con= get_template_directory_uri();
  $stt=1;
    if($data){
      echo "<div class='pagination featured-pre ticket-pre'>";     
          
            echo"<button  id='pre-page'>";
              echo"next";
            echo "</button>";
          
      echo "</div>";
      
      echo"<div class='sticket-detail'>";
          echo"<div class='overflow-ticket' id='off'>";
          foreach($data as $key => $value){
          }
             for($i=1;$i<=$value['quantity'];$i++) {
            echo "<div class='sticket-feature'>";
              echo $i;echo "<br>";
              echo $value['id'];echo "<br>";
              echo $value['name'] ;echo "<br>";
              echo $value['loai'];
              echo $value['price'];    
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
            echo "Số vé : " .$value['quantity'];  
          echo "</p>";

          echo "<div class='down-ticket'>";
            echo"<button id='download'>";
                echo"Tải về";
            echo "</button>";
            echo"<button id='sendmail'>";
              echo"Gửi mail";
            echo "</button>";
          echo"</div>";

          echo "<div class='current-page'>";
            $perpage=1;
            $total_page=ceil($value['quantity']/4);
            echo "<p>";
              echo "Page: ".$perpage. "/". $total_page;
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
   

?>