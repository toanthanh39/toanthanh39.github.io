<?php
session_start();
    $ve1= (isset($_SESSION["ve"]))? $_SESSION["ve"]:[];
    $totalP=(isset($_SESSION["totalprice"]))? $_SESSION["totalprice"]:null;
   
    $data=array();
	 
   require( '../../../wp-load.php' );

//  echo"<pre>";


// //    var_dump($ve1['name']);
//  print_r($ve1);

//  var_dump($ve1);      
          
                
                $data = [
                    'name' => $ve1['name'],
                    'typeticket' => $ve1['loai'],
                    'price' =>$totalP,
                    'email' =>$ve1['email'],
                    'phone' =>$ve1['sdt'],
                    'date' =>$ve1['date']
                ];
               
            
    
     
      global $wpdb;
      $table = $wpdb->prefix . 'ticket';
      $wpdb->insert(
          $table,
          $data
      );
 
      $ticket = $wpdb->insert_id;
   header("location:checkout-detail");
?>