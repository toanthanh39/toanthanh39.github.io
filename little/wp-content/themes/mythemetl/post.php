
<?php 
session_start();
$inf=array();

    $quantity=$_POST["quantity"];
    $date=$_POST["date"];
    $name=$_POST["name_kh"];
    $sdt=$_POST["sdt_kh"];
    $email=$_POST["email_kh"];
    $_SESSION["name"]=$name;
    $loai=$_POST["loai"];
    $total_price=0;
    if($loai=="ggd"){
        $total_price=55000;
       
    }elseif($loai=="ggd1"){
        $total_price=65000;
       
    }elseif($loai=="ggd2"){
        $total_price=75000;
       
    }else{
        $total_price=85000;
    };

$inf=[
    'quantity'=>$quantity,
    'date'=> $date,
    'name'=> $name,
    'sdt'=> $sdt,
    'email'=> $email,
    'total_price'=>$total_price,
    'loai'=>$loai
];



$_SESSION["ve"]=$inf;
// echo"<pre>";
// print_r($_SESSION['ve']);
// print_r($ve1);

 
header("location:checkout");


?>