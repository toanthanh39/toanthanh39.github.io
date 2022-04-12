<?php
require( '../../../wp-load.php' );
$id_del=$_POST["id"];
$option=$_POST["option"];


    
    if($option=="delete"){
            global $wpdb;      
            $table = $wpdb->prefix . 'ticket';
            $delete = $wpdb->delete(
                $table,
                array( 'id' => $id_del),
                array('%d')
            );   
        
            if($delete){
                echo 1;
                exit();  
            }else{
                echo 0;
                exit();
            }
          
       
    };
    
    

    
    
    
    
    
           
 
    
        



?>